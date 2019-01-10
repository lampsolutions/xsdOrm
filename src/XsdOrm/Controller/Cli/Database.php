<?php
namespace XsdOrm\Controller\Cli;


use Slim\Http\Request;
use Slim\Http\Response;
use XsdOrm\Controller\BaseController;
use XsdOrm\Helper\Factory;

class Database extends BaseController {

    /**
     * @var \Slim_AC_Container
     */
    protected $c;

    public function initDatabase(Request $request, Response $response, $args) {




        $folder=$request->getParam("folder");
        $namespace=rtrim($request->getParam("namespace"),"/");
        $unique=$request->getParam("unique");


        Factory::getLoader()->add($namespace, APP_ROOT.'/generated');

        if($unique){
            $unique=explode(",",$unique);
        }

        $folder = APP_ROOT . $folder;
        foreach ($this->glob_recursive($folder . "/*.php") as $repository) {
            $relative_path=str_replace($folder."/","",$repository);
            $classname = $namespace."\\" . str_replace(".php", "",str_replace("/","\\", $relative_path));
            $this->c->orm->createTable($classname,$unique);
        }
    }

    /**
     * @param $pattern
     * @param int $flags
     * @param string $dir
     * @return array
     */
    private function glob_recursive($pattern, $flags = 0) {
        $files = glob($pattern, $flags);


        foreach (glob(dirname($pattern) . '/*', GLOB_ONLYDIR | GLOB_NOSORT) as $dir) {
            $files = array_merge($files, $this->glob_recursive($dir . '/' . basename($pattern), $flags));
        }

        return $files;
    }
}