<?php
namespace Ivdm\Controller\Cli;


use DOMDocument;
use Ivdm\Controller\BaseController;
use Ivdm\Helper\Orm;
use Ivdm\Repository\AudioRepository;
use ReflectionClass;

class Export extends BaseController{

    public function doDailyExport() {
        $product = $this->c->productAType;
        $productRepository=$this->c->generalRepository;

        $productRepository->setClassAndTable(get_class($product));

        $this->articlesToXml($productRepository->findAll(),"products",$productRepository);

    }

    /**
     * @param $articles
     * @param $root
     * @throws \Interop\Container\Exception\ContainerException
     * @throws \ReflectionException
     */
    protected function articlesToXml($articles, $root,$repository) {

        $filename=APP_ROOT.DIRECTORY_SEPARATOR."var/export/".date("Y-m-d-His")."_export.xml";

        $xml=new \SimpleXMLElement("<?xml version='1.0' standalone='yes'?><".$root."></".$root.">");
        foreach ($articles as $article) {

            $repo = new AudioRepository();
            $audio=$repo->mapElementsFromPhonoet($article,$repository);

            $element=$xml->addChild(Orm::getTableNameFromClassname(get_class($audio)));
            $reflection = new ReflectionClass($audio);
            $properties=$reflection->getProperties();
            foreach($properties as $property) {
                $getter=Orm::getGetterForAttribute($property->getName());
                $key=Orm::getColumnFromAttribute($property->getName());
                $value=$audio->$getter();
                $element->addChild($key,htmlspecialchars($value));
            }

        }
        $dom = new DOMDocument("1.0");
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml->asXML());
        $dom->save($filename);

    }
}