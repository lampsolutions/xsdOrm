<?php
namespace Ivdm\Repository;

use Ivdm\Helper\Orm;
use PDO;
use ReflectionClass;
use Slim\Container;

class BaseRepository implements \Ivdm\Repository\ICRUDRepository{

    /**
     * @var PDO
     */
    protected $pdo = null;

    protected $table;
    protected $class;

    /** @var Container $c */
    protected $c;


    public function __construct(\PDO $pPdo) {
        $this->pdo=$pPdo;
    }

    /**
     * @param $property
     * @param $value
     * @return bool|mixed
     */
    public function find_single_item_by_property($property, $value) {

        if(!empty($value)
            && !in_array($property, array_keys($this->getPropertiesAsArray(new $this->class())))) {
            return false;
        }

        $sql = "SELECT * FROM ".$this->table." WHERE ${property} = :val LIMIT 1";
        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(':val', $value, PDO::PARAM_STR);
        try {
            $sth->execute();
            $r = $sth->fetchObject($this->class);
            return $r;
        } catch(\Exception $e) {
            return false;
        }
    }
    /**
     * @param $property
     * @param $value
     * @return bool|mixed[]
     */
    public function find_multiple_by_property($property, $value, $order_key='id', $order_type='ASC') {
        if(!empty($value)
            && !in_array($property, array_keys(get_object_vars(new $this->class())))) {
            return false;
        }

        $sql = "SELECT * FROM ".$this->table." WHERE ${property} = :val ORDER BY $order_key $order_type";
        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(':val', $value, PDO::PARAM_STR);
        try {
            $sth->execute();
            $r = $sth->fetchAll(PDO::FETCH_CLASS, $this->class);
            return $r;
        } catch(\Exception $e) {
            return false;
        }
    }

    public function find_by_id($id) {
        $sql = "SELECT * FROM ".$this->table." WHERE id = :id";
        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        try {
            $sth->execute();
            $r = $sth->fetchObject($this->class);
            return $r;
        } catch(\Exception $e) {

            return false;
        }
    }
    /**
     * @param mixed $model
     * @return bool|mixed
     */
    public function save($object,$container=false) {
        if($container){
            $this->c=$container;
        }
        if(!empty($object->id)) {
            $existing = $this->find_by_id($object->id);
            if(!$existing) return false;

            $query = [];
            $bindings = $this->getPropertiesAsArray($object);
            foreach(array_keys($bindings) as $key){
                $query[] = "$key=:$key";
            }


            $SQL = "UPDATE ".$this->table." SET ".implode(", ", $query)." WHERE id = :id";
            $sth = $this->pdo->prepare($SQL);

            foreach($bindings as $k => $v){
                if(is_array($bindings[$k])){
                    $elements=count($bindings[$k]);
                    $sth->bindParam(':'.$k, $elements);
                    $reflect = new ReflectionClass($bindings[$k][0]);
                    $foreign_table=strtolower($reflect->getShortName());
                    $this->setMM($object->id,false,$foreign_table,true);//clean all references
                    foreach($bindings[$k] as $element){

                        if(@$element->id>0){
                            $this->addMM($object->id,$element->id,$foreign_table);
                        }
                        else{
                            $innerRepository=$this->c->generalRepository;
                            $innerRepository->setClassAndTable(get_class($element));
                            $tmp=$innerRepository->save($element,$this->c);
                            $this->addMM($object->id,$tmp->id,$foreign_table);
                            $element->id=$tmp->id;
                            $innerRepository->save($element,$this->c);
                        }
                    }
                }
                else if(is_object($bindings[$k])){
                    $ref=1;
                    $sth->bindParam(':'.$k,$ref);
                    $reflect = new ReflectionClass($bindings[$k]);
                    $foreign_table=strtolower($reflect->getShortName());
                    $this->setMM($object->id,false,$foreign_table,true);//clean all references
                    if(@$bindings[$k]->id>0){
                        $this->addMM($object->id,$bindings[$k]->id,$foreign_table);
                    }
                    else{
                        $innerRepository=$this->c->generalRepository;
                        $innerRepository->setClassAndTable(get_class($bindings[$k]));

                        $tmp=$innerRepository->save($bindings[$k],$this->c);
                        $this->addMM($object->id,$tmp->id,$foreign_table);
                        $bindings[$k]->id=$tmp->id;
                        $innerRepository->save($bindings[$k],$this->c);
                    }
                }
                else{
                    $sth->bindParam(':'.$k, $bindings[$k]);
                }
            }
            $sth->bindParam(':id', $object->id, PDO::PARAM_INT);
            if(!$sth->execute()) {
                return false;
            }
            return $this->find_by_id($object->id, true);
        } else {
            $query = [];
            $bindings = $this->getPropertiesAsArray($object);
            foreach(array_keys($bindings) as $key){
                $query[] = "$key=:$key";
            }

            $SQL = "INSERT INTO ".$this->table." SET ".implode(", ", $query);
            $sth = $this->pdo->prepare($SQL);
            foreach($bindings as $k => $v){
                if(is_array($bindings[$k])){
                    $elements=count($bindings[$k]);
                    $sth->bindParam(':'.$k, $elements);

                }
                else if(is_object($bindings[$k])){
                    @$ref=$bindings[$k]->id;
                    $sth->bindParam(':'.$k,$ref);
                }
                else{
                    $sth->bindParam(':'.$k, $bindings[$k]);
                }
            }
            if(!$sth->execute()) {
                return false;
            }
            return $this->find_by_id($this->pdo->lastInsertId());
        }
    }

    public function cascateDelete($local_id,$foreign_table,$tablename){
        $sql="SELECT ".$foreign_table."_id FROM ".$tablename." WHERE ".$this->table."_id=:localid";
        $sth=$this->pdo->prepare($sql);
        $sth->bindParam(":localid",$local_id);
        $ids=$sth->fetchColumn();
        if($ids && count($ids)>0) {
            $class = Orm::dashesToCamelCase($foreign_table);
            $object = $this->c->$class;
            $repository = $this->c->generalRepository;
            $repository->setClassAndTable(get_class($object));
            foreach ($ids as $id) {
                $object->id = $id;
                $repository->delete($object);
            }
        }
    }

    public function setMM($local_id,$foreign_id,$foreign_table,$cascate) {
        $tablename=$this->table."_has_".$foreign_table;

        if($cascate){
            $this->cascateDelete($local_id,$foreign_table,$tablename);
        }
        $sql="DELETE FROM
                ".$tablename."
              WHERE
                ".$this->table."_id=:localid";
        $sth=$this->pdo->prepare($sql);
        $sth->bindParam(":localid",$local_id);
        $sth->execute();
        if(false!==$foreign_id) {
            $this->addMM($local_id,$foreign_id,$foreign_table);
        }
    }

    public function addMM($local_id,$foreign_id,$foreign_table) {

        if(is_object($foreign_id)) {
            $foreign_id=$foreign_id->id;
        }
        if(is_array($foreign_id)) {
            return;
        }

        $tablename=$this->table."_has_".$foreign_table;
        $sql="INSERT IGNORE INTO
                $tablename
              SET
                ".$this->table."_id=:localid,
                ".$foreign_table."_id=:foreignid";
        $sth=$this->pdo->prepare($sql);



        $sth->bindParam(":localid",$local_id);

        $sth->bindParam(":foreignid",$foreign_id);

        $sth->execute();

    }

    public function getPropertiesAsArray($object){
        $reflection = new ReflectionClass($object);
        $properties = $reflection->getProperties();
        foreach($properties as $property) {
            $getter=Orm::getGetterForAttribute($property->getName());
            $k=Orm::getColumnFromAttribute($property->getName());
            $v=$object->$getter();
            if($k == "id" ) continue;
            $query[] = "$k=:$k";
            $bindings[$k] = $v;
        }
        return  $bindings;
    }

    /**
     * @param mixed $model
     * @return bool|mixed
     */
    public function delete($object) {
        if(!empty($object->id)) {
            $sql = "DELETE FROM " . $this->table . " WHERE id = :id";
            $sth = $this->pdo->prepare($sql);
            $sth->bindParam(':id', $object->id, PDO::PARAM_INT);
            try {
                $sth->execute();
                $r = $sth->fetchObject($this->class);
                return $r;
            } catch (\Exception $e) {
                return false;
            }
        }
        return false;
    }

    public function findAll($order=false, $sorting=false) {

        if($sorting!=="DESC") {
            $sorting="ASC";
        }

        $sqlOrder="";
        if($order && property_exists($this->class,$order)) {
            $sqlOrder=" ORDER BY ".$order." ".$sorting;
        }

        $sql = "SELECT * FROM ".$this->table.$sqlOrder;
        $sth = $this->pdo->prepare($sql);
        try {
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_CLASS, $this->class);
            return $result;
        } catch(\Exception $e) {

            return false;
        }
    }


    private function getAllFieldsWithValues($object){
        $reflection = new ReflectionClass($object);
        $properties = $reflection->getProperties();
        $bindings=[];
        foreach($properties as $property) {
            $getter=Orm::getGetterForAttribute($property->getName());
            $k=Orm::getColumnFromAttribute($property->getName());
            $v=$object->$getter();
            if($k == "id"  || is_object($v)) continue;
            $query[] = "$k=:$k";
            $bindings[$k] = $v;
        }
        return $bindings;
    }

    public function toXml($objects,$root){
            $xml=new \SimpleXMLElement("<?xml version='1.0' standalone='yes'?><$root></$root>");
            foreach ($objects as $object) {
                $element=$xml->addChild(get_class($object));
                foreach ($this->getAllFieldsWithValues($object) as $key => $value) {
                    if (strpos($value,",")) {
                        $field=$element->addChild($key);
                        foreach (explode(",", $value) as $element) {
                            $field->addChild($key."_item", $element);
                        }
                    }
                    else {
                        $element->addChild($key, $value);
                    }
                }
            }
            return $xml->asXML();

    }

    /**
     * @param $local_id
     * @param $foreign_table
     * @param \Bayernpartei\Repository\ICRUDRepository $foreignRepository
     */
    public function getMM($local_id,$foreign_table,$foreignRepository) {
        $tablename=$this->table."_has_".$foreign_table;
        $sql="SELECT 
                ".$foreign_table."_id as id
              FROM
                ".$tablename."
              WHERE
                ".$this->table."_id=:localid";
        $sth=$this->pdo->prepare($sql);
        $sth->bindParam(":localid",$local_id);
        $sth->execute();
        $result=$sth->fetchAll(PDO::FETCH_ASSOC);
        $return=[];
        foreach($result as $row) {
            $object=$foreignRepository->find_by_id($row["id"]);
            if($object) {
                $return[]=$object;
            }
        }
        return $return;
    }
}