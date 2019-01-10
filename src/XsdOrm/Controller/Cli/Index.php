<?php
namespace XsdOrm\Controller\Cli;

use Slim\Http\Request;
use Slim\Http\Response;
use XsdOrm\Controller\BaseController;

class Index extends BaseController {


    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @Override
     */
    public function index(Request $request, Response $response, $args){

        $this->setup_template(
            "XsdOrm/Cli/Index.twig"
        );

        $this->render($request, $response);
    }

}