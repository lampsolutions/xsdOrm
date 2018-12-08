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
    public function createTable(String $classname):void {


        if(class_exists($classname)) {
            $table=$this->getTableNameFromClassname($classname);
            $this->createTableSql($table);
            $this->addAttributeFields($classname);
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
    public function addAttributeFields(String $class) :void{
        $class_vars = get_class_vars($class);
        foreach($class_vars as $name => $value) {
            $this->addAttributeField($name,
                $this->getTableNameFromClassname($class),
                $this->getTypeFromClassAndAtribute($class,$name)
            );
        }
        $getter=get_class_methods($class);
        foreach($getter as $name){
            if(strpos($name,"get")===0){
                $converter = new CamelCaseToSnakeCaseNameConverter();
                $attribute=$converter->normalize(str_replace("get","",$name));
                $this->addAttributeField($attribute,
                    $this->getTableNameFromClassname($class),
                    $this->getTypeFromClassAndAtribute($class,$name)
                );
            }
        }
    }

    protected function getTypeFromClassAndAtribute($class,$name){
        $reflectionClass = new ReflectionClass($class);
        $attribute=lcfirst(str_replace("get","",$name));
        $pattern = "#(@[a-zA-Z]+\s*[a-zA-Z0-9, ()_].*)#";
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
                        $result="TEXT";
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
     */
    protected function addAttributeField($name,$table,$type="TEXT") :void{
        $sql="ALTER TABLE 
                `".$table."` 
              ADD COLUMN `".$name."` ".$type." ";
        try{
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
        }catch (\Exception $e) {
            //ignore
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
            $this->addAttributeField($local."_id","INT(11)",$tablename);
            $this->addAttributeField($foreign."_id","INT(11)",$tablename);
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


}