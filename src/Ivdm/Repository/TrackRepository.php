<?php

namespace Ivdm\Repository;


use Ivdm\Helper\Orm;
use Ivdm\Alpha\Audio;
use Ivdm\Phononet\Track;

class TrackRepository{

    protected $class="\Ivdm\Alpha\Track";

    public function mapElementsFromPhonoet(Track $track,GeneralRepository $repository){
        /** @var Audio $element */
        $element = new \Ivdm\Alpha\Track();
        $properties=$repository->getPropertiesAsArray($element);
        foreach(array_keys($properties) as $property){
            $mapper=Orm::getMapperIncommingForAttribute($property);

            if(method_exists($element,$mapper)) {

                $element->$mapper($track);
            }
        }
        return $element;
    }
}