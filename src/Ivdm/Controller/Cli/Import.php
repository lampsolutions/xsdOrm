<?php
namespace Ivdm\Controller\Cli;


use Ivdm\Controller\BaseController;
use Ivdm\Helper\Orm;
use ReflectionClass;

class Import extends BaseController {

    public function doDailyImport(){

        foreach (glob(APP_ROOT."/var/*.xml") as $filename) {
            $this->importFromFile($filename);
        }

    }

    protected function importFromFile($filename){
        $this->c->logger->info("Reading from ".$filename);
        stream_filter_register('xmlutf8', '\Ivdm\Helper\ValidUTF8XMLFilter');
        $xml = simplexml_load_file("php://filter/read=xmlutf8/resource=".$filename);
        $elements=$xml->count();
        $i=0;
        $j=0;
        foreach($xml as $xmlElement) {
            $product = $this->c->productAType;
            $productRepository=$this->c->generalRepository;
            $productRepository->setClassAndTable(get_class($product));
            $this->simpleXml2Object($xmlElement,$product);
            $productRepository->save($product);
        }
    }


    /**
     * Convert a SimpleXML object to an associative array
     *
     * @param object $xmlObject
     *
     * @return array
     * @access public
     */
    function simpleXml2Object($xmlObject,&$object){
        $array = [];
        foreach ($xmlObject->children() as $node) {
            $setter=Orm::getSetterForAttribute($node->getName());
            if(method_exists($object,$setter)){
                $class = new ReflectionClass(get_class($object));
                $reflectedSetter=$class->getMethod($setter);
                $type=$reflectedSetter->getParameters()[0]->getType();
                if($type===null){
                    $object->$setter((string)$node);
                }



            }
           // $array[$node->getName()] = is_array($node) ? simplexml_to_array($node) : (string) $node;
        }
    }




}

