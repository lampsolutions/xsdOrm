<?php

namespace Ivdm\Alpha;

class Tracks {

            
    /**
    * 
    */
    protected $number_of_tracks;

            
    /**
    * 
    */
    protected $track;

            
    /**
    * Track- oder Gesamtspieldauer 
 	* 
 	* Track- oder Gesamtspieldauer (mmmss)
    */
    protected $playtime;

    
                /**
    * get number_of_tracks
    */
    public function getNumberoftracks(){
        return $this->number_of_tracks;
    }        
    /**
    * set number_of_tracks
    * @param $pNumber_of_tracks
    */
    public function setNumberoftracks($pNumber_of_tracks){
        $this->number_of_tracks=$pNumber_of_tracks;
    }
                    
    /**
    * map number_of_tracks
    * @param $targetObject
    */
    public function mapNumberoftracks(&$targetObject){
        $targetObject->setnumberOfTracks($this->number_of_tracks);
    }
            
    /**
    * map number_of_tracks
    * @param $targetObject
    */
    public function mapNumberoftracksIncomming(&$targetObject){
        $this->number_of_tracks=$targetObject->getNumberoftracks();
    }
                        /**
    * get track
    */
    public function getTrack(){
        return $this->track;
    }        
    /**
    * set track
    * @param $pTrack
    */
    public function setTrack($pTrack){
        $this->track=$pTrack;
    }
                    
    /**
    * map track
    * @param $targetObject
    */
    public function mapTrack(&$targetObject){
        $targetObject->settrack($this->track);
    }
            
    /**
    * map track
    * @param $targetObject
    */
    public function mapTrackIncomming(&$targetObject){
        $this->track=$targetObject->getTrack();
    }
                        /**
    * get playtime
    */
    public function getPlaytime(){
        return $this->playtime;
    }        
    /**
    * set playtime
    * @param $pPlaytime
    */
    public function setPlaytime($pPlaytime){
        $this->playtime=$pPlaytime;
    }
                    
    /**
    * map playtime
    * @param $targetObject
    */
    public function mapPlaytime(&$targetObject){
        $targetObject->setplaytime($this->playtime);
    }
            
    /**
    * map playtime
    * @param $targetObject
    */
    public function mapPlaytimeIncomming(&$targetObject){
        $this->playtime=$targetObject->getPlaytime();
    }
            

}