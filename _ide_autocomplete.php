<?php

class Slim_AC_Container extends \Slim\Container {


    /**
     * @var \PDO;
     */
    public $pdo;

    /**
     * @var \XsdOrm\Helper\Orm
     */
    public $orm;

    /**
     * @var \XsdOrm\Phononet\Products\ProductAType
     */
    public $productAType;

    /**
     * @var \XsdOrm\Repository\GeneralRepository
     */
    public $generalRepository;


}