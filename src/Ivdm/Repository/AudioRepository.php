<?php

namespace Ivdm\Repository;


use Ivdm\Helper\Orm;
use Ivdm\Alpha\Audio;
use Ivdm\Phononet\Products\ProductAType;

class AudioRepository{

    protected $class="\Ivdm\Alpha\Audio";

    public function mapElementsFromPhonoet(ProductAType $product,GeneralRepository $repository){
        /** @var Audio $element */
        $element = new Audio();
        $properties=$repository->getPropertiesAsArray($element);
        foreach(array_keys($properties) as $property){
            $mapper=Orm::getMapperIncommingForAttribute($property);
            if(method_exists($element,$mapper)) {
                $element->$mapper($product);

            }
        }
        return $element;
    }
}