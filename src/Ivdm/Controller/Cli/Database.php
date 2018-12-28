<?php
namespace Ivdm\Controller\Cli;


use Ivdm\Controller\BaseController;

class Database extends BaseController {

    /**
     * @var \Slim_AC_Container
     */
    protected $c;

    public function initPhononetDatabase() {

        $folder = APP_ROOT . "src/Ivdm/Phononet";
        foreach ($this->glob_recursive($folder . "/*.php") as $repository) {
            $relative_path=str_replace($folder."/","",$repository);
            $classname = "\Ivdm\Phononet\\" . str_replace(".php", "",str_replace("/","\\", $relative_path));
            $this->c->orm->createTable($classname,["gtin"]);
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