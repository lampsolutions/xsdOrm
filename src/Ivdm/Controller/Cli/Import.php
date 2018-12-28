<?php
namespace Ivdm\Controller\Cli;


use Ivdm\Controller\BaseController;
use Ivdm\Helper\Orm;
use ReflectionClass;
use Slim\Exception\ContainerValueNotFoundException;

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
        $product = $this->c->productAType;


        foreach($xml as $xmlElement) {
            $product = $this->c->productAType;
            $productRepository=$this->c->generalRepository;
            $productRepository->setClassAndTable(get_class($product));
            $existing=$productRepository->find_single_item_by_property("gtin",(string)$xmlElement->gtin);
            if($existing){
                $product=$existing;
            }
            $this->simpleXml2Object($xmlElement,$product);
            if(!$existing){
                $tmp=$productRepository->save($product,$this->c);
                $product->id=$tmp->id;
            }
            $productRepository->save($product,$this->c);
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
    function simpleXml2Object($xmlObject,&$object,&$parent=null){
        foreach ($xmlObject->children() as $node) {
            $setter=Orm::getSetterForAttribute($node->getName());
            if(method_exists($object,$setter)){

                $class = new ReflectionClass(get_class($object));
                $reflectedSetter=$class->getMethod($setter);
                $type=(String)$reflectedSetter->getParameters()[0]->getType();
                if($type===""){
                    $object->$setter((string)$node);
                }
                else if(strpos($type,"Phononet")){
                    $name=strtolower(substr(strrchr($type, "\\"), 1));
                    $innerObject=$this->c->$name;


                    if($parent) {
                        $parent->$setter($innerObject);
                    }
                    else{
                        $object->$setter($innerObject);
                    }
                    $this->simpleXml2Object($node,$innerObject,$object);

                }
                else if($type=="array"){
                    $adder=str_replace("set","addTo",$setter);
                    if(method_exists($object,$adder)) {
                        $name = strtolower(str_replace("addTo","",$adder));
                        try {
                            $innerObject = $this->c->$name;
                        }catch (ContainerValueNotFoundException $e){
                            continue;
                        }
                        $this->simpleXml2Object($node, $innerObject,$parent);
                        $object->$adder($innerObject);
                    }
                }

            }
        }
    }




}

