<?php

class Slim_AC_Container extends \Slim\Container {


    /**
     * @var \PDO;
     */
    public $pdo;

    /**
     * @var \Ivdm\Helper\Orm
     */
    public $orm;

    /**
     * @var \Ivdm\Phononet\Products\ProductAType
     */
    public $productAType;

    /**
     * @var \Ivdm\Repository\GeneralRepository
     */
    public $generalRepository;


}