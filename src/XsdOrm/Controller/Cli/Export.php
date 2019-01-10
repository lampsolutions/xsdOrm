<?php
namespace XsdOrm\Controller\Cli;


use DOMDocument;
use XsdOrm\Alpha\Tracks;
use XsdOrm\Controller\BaseController;
use XsdOrm\Helper\Orm;
use XsdOrm\Repository\AudioRepository;
use XsdOrm\Repository\TrackRepository;
use ReflectionClass;

class Export extends BaseController{

    public function doDailyExport() {
        $product = $this->c->productAType;
        $productRepository=$this->c->generalRepository;

        $productRepository->setClassAndTable(get_class($product));

        $this->articlesToXml($productRepository->findAll(false,false,$this->c),"products",$productRepository);

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

            $tracksRepository = $this->c->generalRepository;
            $tracksRepository->setClassAndTable("XsdOrm\Phononet\Tracks");
            $tracks=$repository->getMM($article->id,"tracks",$tracksRepository);

            foreach($properties as $property) {
                if($property->getName() == "tracks"){
                    continue;
                }
                if($property->getName() == "number_of_tracks"){
                    if($tracks){
                        $element->addChild("number_of_tracks",$tracks[0]->getNumberoftracks());
                    }
                    continue;
                }
                if($property->getName() == "playtime"){
                    if($tracks){
                        $element->addChild("playtime",$tracks[0]->getPlaytime());
                    }
                    continue;
                }
                if($property->getName() == "cover_vorne") {
                    $coverRepository = $this->c->generalRepository;
                    $coverRepository->setClassAndTable("XsdOrm\Phononet\TArtworkPictureType");
                    $covers = $repository->getMM($article->id, "t_artwork_picture_type", $coverRepository);
                    $frontCover=null;
                    foreach($covers as $cover){
                        if($cover->getType()=="front"){
                            if($cover->resolutionX==600){
                                $frontCover=$cover;
                            }
                            elseif(!$frontCover){
                                $frontCover=$cover;
                            }
                        }
                    }
                    $link="";
                    if($frontCover){
                        $link="http://real1.phononet.de/alphacov600/".$frontCover->file;
                    }
                    $element->addChild("cover_vorne", $link);
                    continue;

                }


                if($property == "cover_hinten") {
                    $coverRepository = $this->c->generalRepository;
                    $coverRepository->setClassAndTable("XsdOrm\Phononet\TArtworkPictureType");
                    $cover = $coverRepository->getMM($article->id, "product_a_type_has_t_artwork_picture_type", $coverRepository);
                    $element->addChild("cover_hinten");
                    continue;
                }

                $getter=Orm::getGetterForAttribute($property->getName());
                $key=Orm::getColumnFromAttribute($property->getName());
                $value=$audio->$getter();
                $element->addChild($key,htmlspecialchars($value));
            }

            if($tracks){
                $tracksElement=$element->addChild("tracks");
                $trackRepository = $this->c->generalRepository;
                $trackRepository->setClassAndTable("XsdOrm\Phononet\Track");
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