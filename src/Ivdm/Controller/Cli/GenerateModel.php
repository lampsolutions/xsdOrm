<?php
namespace Ivdm\Controller\Cli;


use Ivdm\Controller\BaseController;
use Ivdm\Helper\Orm;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;
use Twig_Environment;

class GenerateModel extends BaseController {

    /**
     * @var \Slim_AC_Container
     */
    protected $c;

    /**
     * @var Twig_Environment $twig
     */
    protected $twig;

    public function __construct(Container $c) {

        $loader = new \Twig_Loader_Filesystem(APP_ROOT.'/Templates/Cli');
        $this->twig = new Twig_Environment($loader, array(
            'cache' => false,
        ));
        $this->twig->addExtension(
            new \Twig_Extension_Debug()
        );

        parent::__construct($c);
    }

    public function generateModelFromCsv(Request $request, Response $response, $args) {

        $file=$request->getParam("filename");
        $target=$request->getParam("target");

        $row = 0;
        $modelData=[
            "namespace" => "\Ivdm\Alpha",
            "classname" => str_replace(".php","",basename($target))
        ];

        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $row++;
                if($row<3){
                    continue;
                }

                $description = $data[1];
                if($data[1]){
                    $description.= "\n\n";
                }
                $description.=$data[2];
                if($data[2]){
                    $description.= "\n\n";
                }
                $description.=$data[3];

                $mapping=false;
                if($data[5]) {
                    $mapping = Orm::dashesToCamelCase($data[5]);
                    if (strpos($mapping, "[") !== false) {
                        $tmp = explode("[", $mapping);
                        $mapping = $tmp[0] . "()[" . $tmp[1];
                    } else {
                        $mapping = $mapping . "()";
                    }
                }
                $modelData["attributes"][$row] = [
                    "attribute" => $data[0],
                    "method" => Orm::dashesToCamelCase($data[0]),
                    "description" => str_replace("\n", "\n \t* ", $description),
                    "mapping" => $mapping,
                    "setMapping" => "set".Orm::dashesToCamelCase($data[5])
                ];

            }
            fclose($handle);
        }
        $fp = fopen($target, 'w+');
        $out = $this->twig->render("Model.twig", $modelData);
        fwrite($fp,$out);

    }


}