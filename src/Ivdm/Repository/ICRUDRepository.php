<?php

namespace Ivdm\Repository;

interface ICRUDRepository{
    /**
     * @param $property
     * @param $value
     * @return bool|mixed
     */
    public function find_single_item_by_property($property, $value);

    /**
     * @param $property
     * @param $value
     * @return bool|mixed[]
     */
    public function find_multiple_by_property($property, $value);

    public function find_by_id($id);

    /**
     * @param mixed $model
     * @return bool|mixed
     */
    public function save($model);

    /**
     * @param mixed $model
     * @return bool|mixed
     */
    public function delete($model);

    /**
     * @return mixed
     */
    public function findAll();
}