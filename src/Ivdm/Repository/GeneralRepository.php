<?php
namespace Ivdm\Repository;

use Ivdm\Helper\Orm;

class GeneralRepository extends \BaseRepository{


    public function __construct(\PDO $pPdo) {
        parent::__construct($pPdo);
    }

    public function setClassAndTable($classname){
        $this->class=$classname;
        $this->table=Orm::getTableNameFromClassname($classname);
    }
}