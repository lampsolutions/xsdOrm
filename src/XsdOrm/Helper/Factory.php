<?php
namespace XsdOrm\Helper;

class Factory {
    /**
     * instance
     *
     * Statische Variable, um die aktuelle (einzige!) Instanz dieser Klasse zu halten
     *
     * @var Singleton
     */
    protected static $_instance = null;

    protected $container=null;

    protected $loader;

    /**
     * get instance
     *
     * Falls die einzige Instanz noch nicht existiert, erstelle sie
     * Gebe die einzige Instanz dann zurück
     *
     * @return   Singleton
     */
    public static function getInstance()
    {
        if (null === self::$_instance)
        {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public static function setContainer($container){
        self::getInstance()->container=$container;
    }

    public static function setLoader($loader){
        self::getInstance()->loader=$loader;
    }

    /**
     * @param $container
     * @return mixed
     */
    public static function getContainer(){
        return self::getInstance()->container;
    }

    public static function getLoader(){
        return self::getInstance()->loader;

    }

    /**
     * clone
     *
     * Kopieren der Instanz von aussen ebenfalls verbieten
     */
    protected function __clone() {}

    /**
     * constructor
     *
     * externe Instanzierung verbieten
     */
    protected function __construct() {}
}
?>