<?php
namespace \Ivdm\Repository;

class BaseRepository implements \Ivdm\Repository\ICRUDRepository{

    /**
     * @param $property
     * @param $value
     * @return bool|mixed
     */
    public function find_single_item_by_property($property, $value) {
        if(!empty($value)
            && !in_array($property, array_keys(get_object_vars(new $this->class($this->c))))) {
            return false;
        }

        $sql = "SELECT * FROM ".$this->table." WHERE ${property} = :val LIMIT 1";
        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(':val', $value, PDO::PARAM_STR);
        try {
            $sth->execute();
            $r = $sth->fetchObject($this->class, [$this->c]);
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
            && !in_array($property, array_keys(get_object_vars(new $this->class($this->c))))) {
            return false;
        }

        $sql = "SELECT * FROM ".$this->table." WHERE ${property} = :val ORDER BY $order_key $order_type";
        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(':val', $value, PDO::PARAM_STR);
        try {
            $sth->execute();
            $r = $sth->fetchAll(PDO::FETCH_CLASS, $this->class, [$this->c]);
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
            $r = $sth->fetchObject($this->class, [$this->c]);
            return $r;
        } catch(\Exception $e) {

            return false;
        }
    }
    /**
     * @param mixed $model
     * @return bool|mixed
     */
    public function save($object) {
        if(!empty($object->id)) {
            $existing = $this->find_by_id($object->id);
            if(!$existing) return false;

            $query = [];
            $bindings = [];
            foreach(get_object_vars($object) as $k => $v) {
                if($k == "id" || is_object($v)) continue;
                $query[] = "$k=:$k";
                $bindings[$k] = $v;
            }

            $SQL = "UPDATE ".$this->table." SET ".implode(", ", $query)." WHERE id = :id";
            $sth = $this->pdo->prepare($SQL);
            if(null==$bindings[$k]) {
                $bindings[$k]="";
            }
            foreach ($bindings as $k => $v) {
                $sth->bindParam(':'.$k, $bindings[$k]);
            }
            $sth->bindParam(':id', $object->id, PDO::PARAM_INT);
            if(!$sth->execute()) {
                return false;
            }
            return $this->find_by_id($object->id, true);
        } else {
            $query = [];
            $bindings = [];
            foreach(get_object_vars($object) as $k => $v) {
                if($k == "id"  || is_object($v)) continue;
                $query[] = "$k=:$k";
                $bindings[$k] = $v;
            }

            $SQL = "INSERT INTO ".$this->table." SET ".implode(", ", $query);
            $sth = $this->pdo->prepare($SQL);
            foreach($bindings as $k => $v) $sth->bindParam(':'.$k, $bindings[$k]);
            if(!$sth->execute()) {
                return false;
            }
            return $this->find_by_id($this->pdo->lastInsertId());
        }
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
                $r = $sth->fetchObject($this->class, [$this->c]);
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
            $result = $sth->fetchAll(PDO::FETCH_CLASS, $this->class, [$this->c]);
            return $result;
        } catch(\Exception $e) {

            return false;
        }
    }
}