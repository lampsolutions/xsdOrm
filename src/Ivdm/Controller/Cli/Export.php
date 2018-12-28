<?php
namespace Ivdm\Controller\Cli;


use DOMDocument;
use Ivdm\Alpha\Tracks;
use Ivdm\Controller\BaseController;
use Ivdm\Helper\Orm;
use Ivdm\Repository\AudioRepository;
use Ivdm\Repository\TrackRepository;
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
                if($property == "Tracks"){
                    continue;
                }
                $getter=Orm::getGetterForAttribute($property->getName());
                $key=Orm::getColumnFromAttribute($property->getName());
                $value=$audio->$getter();
                $element->addChild($key,htmlspecialchars($value));
            }
            $tracksRepository = $this->c->generalRepository;
            $tracksRepository->setClassAndTable("Ivdm\Alpha\Tracks");
            $tracks=$repository->getMM($article->id,"tracks",$tracksRepository);
            if($tracks){
                $tracksElement=$element->addChild("tracks");
                $tracksElement->addChild("number_of_tracks",$tracks[0]->getNumberoftracks());
                $tracksElement->addChild("playtime",$tracks[0]->getPlaytime());
                $trackRepository = $this->c->generalRepository;
                $trackRepository->setClassAndTable("Ivdm\Phononet\Track");
                $singleTrack=$tracksRepository->getMM($tracks[0]->id,"track",$trackRepository);

                if($singleTrack){
                    foreach($singleTrack as $trackItem){
                        $repo = new TrackRepository();
                        $track=$repo->mapElementsFromPhonoet($trackItem,$repository);

                        $trackElement=$tracksElement->addChild(Orm::getTableNameFromClassname(get_class($track)));
                        $reflection = new ReflectionClass($track);
                        $properties=$reflection->getProperties();

                        foreach($properties as $property) {
                            $getter=Orm::getGetterForAttribute($property->getName());
                            $key=Orm::getColumnFromAttribute($property->getName());
                            $value=$track->$getter();
                            $trackElement->addChild($key,htmlspecialchars($value));
                        }

                    }

                }



            }

        }
        $dom = new DOMDocument("1.0");
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml->asXML());
        $dom->save($filename);

    }
}