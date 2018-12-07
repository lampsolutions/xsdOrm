<?php

namespace Ivdm\Controller;

use Slim\Http\Response;
use Slim\Http\Request;
use Slim\Container;

abstract class BaseController {


    /**
     * @var \Slim_AC_Container
     */
    protected $c;

    /**
     * @param \Slim\Container $c
     */
    public function __construct(\Slim\Container $c) {
        $this->c = $c;
    }
}