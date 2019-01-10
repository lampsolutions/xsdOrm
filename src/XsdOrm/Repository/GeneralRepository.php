<?php
namespace XsdOrm\Repository;

use XsdOrm\Helper\Orm;

class GeneralRepository extends BaseRepository{


    public function __construct(\PDO $pPdo) {
        parent::__construct($pPdo);
    }

    public function setClassAndTable($classname){
        $this->class=$classname;
        $this->table=Orm::getTableNameFromClassname($this->class);
    }

    public function setClassAndTableFromObject($object){
        $this->class=get_class($object);
        $this->table=Orm::getTableNameFromClassname($this->class);
    }
}