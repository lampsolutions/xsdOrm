<?php

namespace XsdOrm\Controller;

use ReflectionClass;
use Slim\Http\Response;
use Slim\Http\Request;

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
        $this->view = $c->get('view');
    }

    /**
     * data used in TWIG-Template
     * @var array $data
     */
    protected $data=[];

    /**
     * path to template file
     *
     * @var string $template
     */
    protected $template=null;

    /**
     * @var null
     */
    protected $model=null;

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @throws \Exception
     */
    public function index(Request $request, Response $response, $args){

        $this->setup_template(
            (new ReflectionClass($this->model))->getShortName().'/index.twig'
        );

        $this->render($request, $response);
    }

    public function setup_template($tpl) {
        $this->template = $tpl;
    }


    public function render(Request $request, Response $response) {


        $this->view->render($response, $this->template, $this->data);
    }

}