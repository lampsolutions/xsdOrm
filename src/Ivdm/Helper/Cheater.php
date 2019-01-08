<?php
namespace Ivdm\Helper;

class Cheater {
    /**
     * instance
     *
     * Statische Variable, um die aktuelle (einzige!) Instanz dieser Klasse zu halten
     *
     * @var Singleton
     */
    protected static $_instance = null;

    protected $container=null;

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

    /**
     * @param $container
     * @return mixed
     */
    public static function getContainer(){
        return self::getInstance()->container;
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