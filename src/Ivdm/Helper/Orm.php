<?php declare(strict_types=1);


namespace Ivdm\Helper;

use PDO;
use ReflectionClass;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;

class Orm{


    /**
     * @var PDO
     */
    protected $pdo = null;


    /**
     * Orm constructor.
     * @param \PDO $pPdo
     */
    public function __construct(\PDO $pPdo) {
        $this->pdo=$pPdo;
    }

    /**
     * create table in database
     *
     * @param String $classname
     */
    public function createTable(String $classname, array $uniqueFields=null):void {


        if(class_exists($classname)) {
            $table=$this->getTableNameFromClassname($classname);
            $this->createTableSql($table);
            $this->addAttributeFields($classname,$uniqueFields);
        }
        else {
            return;
        }
    }

    /**
     * create table in database
     *
     * @param String $classname
     */
    public function createTableSql($tablename):void {

        $sql="CREATE TABLE 
            ".$tablename."
          (`id` INT NOT NULL AUTO_INCREMENT, 
          PRIMARY KEY (`id`)) 
          ENGINE = InnoDB";
        $sth = $this->pdo->prepare($sql);
        try {
            $sth->execute();
        }catch (\Exception $e) {
            //ignore
        }

    }

    /**
     * @param String $classname
     * @return String
     */
    public static function getTableNameFromClassname(String $classname) :String{

        $simpleClassname=explode("\\",$classname);
        $simpleClassname=array_pop($simpleClassname);

        $converter = new CamelCaseToSnakeCaseNameConverter();
        $table=$converter->normalize($simpleClassname);
        return $table;
    }

    /**
     * add all attribute field to database
     * @param String $class
     */
    public function addAttributeFields(String $class, array $uniqueFields=null) :void{
        $class_vars = get_class_vars($class);
        foreach($class_vars as $name => $value) {
            $unique=in_array($name,$uniqueFields);
            $this->addAttributeField($name,
                $this->getTableNameFromClassname($class),
                $this->getTypeFromClassAndAtribute($class,$name),
                $unique
            );
        }
        $getter=get_class_methods($class);
        foreach($getter as $name){
            if(strpos($name,"get")===0){
                $converter = new CamelCaseToSnakeCaseNameConverter();
                $attribute=$converter->normalize(str_replace("get","",$name));
                $unique=in_array($attribute,$uniqueFields);

                $this->addAttributeField($attribute,
                    $this->getTableNameFromClassname($class),
                    $this->getTypeFromClassAndAtribute($class,$name),
                    $unique
                );
            }
        }
    }

    protected function getTypeFromClassAndAtribute($class,$name){
        $reflectionClass = new ReflectionClass($class);
        $attribute=lcfirst(str_replace("get","",$name));
        $pattern = "#(@[a-zA-Z]+\s*[a-zA-Z0-9, ()_].*)#";
        $pattern_digits = "#(\d{1,3})\sdigits#";

        try{
            $annotation=($reflectionClass->getProperty($attribute)->getDocComment());
            $matches=[];
            $hit=preg_match_all($pattern, $annotation, $matches, PREG_PATTERN_ORDER);

            if($hit){
                $type=explode(" ",$matches[0][0])[1];

                if(count(explode("\\",$type))>2){
                    $foreign=(explode("\\",$type));
                    $foreign=str_replace("[]","",array_pop($foreign));
                    $this->createMMTable(
                        $this->getTableNameFromClassname($class),
                        $this->getTableNameFromClassname($foreign)
                    );
                    return "INT(11)";
                }
                switch ($type){
                    case "string":
                        $matchesDigits=[];
                        preg_match_all($pattern_digits, $annotation, $matchesDigits, PREG_PATTERN_ORDER);
                        @$digits=$matchesDigits[1][0];
                        if($digits > 0){
                            $result="VARCHAR(".$digits.")";

                        }
                        else{
                            $result="TEXT";

                        }
                        break;
                    case "float":
                        $result="FLOAT";
                        break;
                    case "boolean":
                        $result="TINYINT";
                        break;
                    case "\DateZime":
                        $result="TEXT";
                        break;
                    case "integer":
                        $result="INT(11)";
                        break;
                    default:
                        $result="TEXT";
                }
                return $result;
            }
        }
        catch (\Exception $e){
        }
        return "TEXT";
    }

    /**
     * @param $name
     * @param $table
     * @param string $type
     * @param bool $unique
     */
    protected function addAttributeField($name,$table,$type="TEXT",$unique=false) :void{
        $sql="ALTER TABLE 
                `".$table."` 
              ADD COLUMN `".$name."` ".$type." ";
        try{
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
        }catch (\Exception $e) {
            //ignore
        }
        if($unique){
            $sql="ALTER TABLE 
                `".$table."` 
              ADD UNIQUE (`".$name."`)";
            try{
                $sth = $this->pdo->prepare($sql);
                $sth->execute();
            }catch (\Exception $e) {
                if($name=="gtin") {
                    var_dump($sql);
                    die();
                }
                //ignore
            }
        }
    }


    /**
     * create MM Table for normalized fields
     * @param $foreign
     */
    protected function createMMTable($local,$foreign) {

        $tablename=$local."_has_".$foreign;
        if(!$this->tableExists($tablename)) {
            $this->createTableSql($tablename);
            $this->addAttributeField($local."_id",$tablename,"INT(11)");
            $this->addAttributeField($foreign."_id",$tablename,"INT(11)");
            $sql='ALTER TABLE 
                      '.$tablename.' ADD UNIQUE 
                      ('.$local.'_id, '.$foreign.'_id)';
            $this->pdo->query($sql);
        }
    }

    protected function tableExists($table) {
        $sql="SHOW TABLES LIKE '".$table."'";
        $sth = $this->pdo->prepare($sql);

        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return count($result);
    }

    public static function getSetterForAttribute(String $attribute){
        return "set".self::dashesToCamelCase($attribute,true);
    }

    public static function getGetterForAttribute(String $attribute){
        return "get".self::dashesToCamelCase($attribute,true);
    }

    public static function getMapperIncommingForAttribute(String $attribute){
        return "map".self::dashesToCamelCase($attribute,true)."Incomming";
    }

    public static function getColumnFromAttribute(String $attribute){
        $converter = new CamelCaseToSnakeCaseNameConverter();
        return $converter->normalize($attribute);
    }

    /**
     * @param $string
     * @param bool $capitalizeFirstCharacter
     * @return mixed
     */
    public static function dashesToCamelCase($string, $capitalizeFirstCharacter = false) {

    $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));

    if (!$capitalizeFirstCharacter) {
        $str[0] = strtolower($str[0]);
    }

    return $str;
}


}