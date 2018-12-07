<?php declare(strict_types=1);


namespace Ivdm\Helper;

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
            $sql="CREATE TABLE 
                ".$table."
              (`id` INT NOT NULL AUTO_INCREMENT, 
              PRIMARY KEY (`id`)) 
              ENGINE = InnoDB";
            $sth = $this->pdo->prepare($sql);
            try {
                $sth->execute();
            }catch (\Exception $e) {
                //ignore
            }
            $this->addAttributeFields($classname);
        }
        else {
            return;
        }
    }

    /**
     * @param String $classname
     * @return String
     */
    private function getTableNameFromClassname(String $classname) :String{

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
                $this->getTableNameFromClassname($class)
            );
        }
        $getter=get_class_methods($class);
        foreach($getter as $name){
            if(strpos($name,"get")===0){
                $converter = new CamelCaseToSnakeCaseNameConverter();
                $attribute=$converter->normalize(str_replace("get","",$name));
                $this->addAttributeField($attribute,
                    $this->getTableNameFromClassname($class)
                );
            }
        }
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
            var_dump($sql);
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
        }catch (\Exception $e) {
            //ignore
        }
    }

}