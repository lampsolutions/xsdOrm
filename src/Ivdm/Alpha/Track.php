<?php

namespace Ivdm\Alpha;

class Track {

            
    /**
    * Aufbau eines einzelnen Track auf der CD
 	* 
 	* 
    */
    protected $track;

            
    /**
    * Tracknummer (numerisch, 2-stellig)
    */
    protected $trackno;

            
    /**
    * Set-Nummer, wenn das Produkt mehrere Medien
 	* enthält (numerisch, 3-stellig)
    */
    protected $setno;

            
    /**
    * Komponist (256 Zeichen) dieses Tracks
    */
    protected $composer;

            
    /**
    * Chorleiter oder Bandleader (256 Zeichen)
    */
    protected $conductor;

            
    /**
    * Orchester (256 Zeichen)
    */
    protected $orchestra;

            
    /**
    * Verleger (256 Zeichen)
    */
    protected $main_publisher;

            
    /**
    * Künstler (256 Zeichen)
    */
    protected $main_artist;

            
    /**
    * Tracktitel (256 Zeichen)
    */
    protected $title;

            
    /**
    * Werktitel (nur im Bereich Klassik, 1024 Zeichen). Diese
 	* Angabe ersetzt die Angabe von Subtracks. D.h.
 	* mehrere aufeinander folgende Tracks mit gleichem
 	* Werktitel gehören zu einem Werk und gelten als
 	* Subtracks dieses Werks.
    */
    protected $work;

            
    /**
    * L für Lifeaufnahme, ansonsten Blank
    */
    protected $is_live;

            
    /**
    * Trackspieldauer (Mmmss)
    */
    protected $playtime;

    
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
       // $this->track=$targetObject->getTrack();
    }
                        /**
    * get trackno
    */
    public function getTrackno(){
        return $this->trackno;
    }        
    /**
    * set trackno
    * @param $pTrackno
    */
    public function setTrackno($pTrackno){
        $this->trackno=$pTrackno;
    }
                    
    /**
    * map trackno
    * @param $targetObject
    */
    public function mapTrackno(&$targetObject){
        $targetObject->settrackno($this->trackno);
    }
            
    /**
    * map trackno
    * @param $targetObject
    */
    public function mapTracknoIncomming(&$targetObject){
        $this->trackno=$targetObject->getTrackno();
    }
                        /**
    * get setno
    */
    public function getSetno(){
        return $this->setno;
    }        
    /**
    * set setno
    * @param $pSetno
    */
    public function setSetno($pSetno){
        $this->setno=$pSetno;
    }
                    
    /**
    * map setno
    * @param $targetObject
    */
    public function mapSetno(&$targetObject){
        $targetObject->setsetno($this->setno);
    }
            
    /**
    * map setno
    * @param $targetObject
    */
    public function mapSetnoIncomming(&$targetObject){
        $this->setno=$targetObject->getSetno();
    }
                        /**
    * get composer
    */
    public function getComposer(){
        return $this->composer;
    }        
    /**
    * set composer
    * @param $pComposer
    */
    public function setComposer($pComposer){
        $this->composer=$pComposer;
    }
                    
    /**
    * map composer
    * @param $targetObject
    */
    public function mapComposer(&$targetObject){
        $targetObject->setcomposer($this->composer);
    }
            
    /**
    * map composer
    * @param $targetObject
    */
    public function mapComposerIncomming(&$targetObject){
        $this->composer=$targetObject->getComposer();
    }
                        /**
    * get conductor
    */
    public function getConductor(){
        return $this->conductor;
    }        
    /**
    * set conductor
    * @param $pConductor
    */
    public function setConductor($pConductor){
        $this->conductor=$pConductor;
    }
                    
    /**
    * map conductor
    * @param $targetObject
    */
    public function mapConductor(&$targetObject){
        $targetObject->setconductor($this->conductor);
    }
            
    /**
    * map conductor
    * @param $targetObject
    */
    public function mapConductorIncomming(&$targetObject){
        $this->conductor=$targetObject->getConductor();
    }
                        /**
    * get orchestra
    */
    public function getOrchestra(){
        return $this->orchestra;
    }        
    /**
    * set orchestra
    * @param $pOrchestra
    */
    public function setOrchestra($pOrchestra){
        $this->orchestra=$pOrchestra;
    }
                    
    /**
    * map orchestra
    * @param $targetObject
    */
    public function mapOrchestra(&$targetObject){
        $targetObject->setorchestra($this->orchestra);
    }
            
    /**
    * map orchestra
    * @param $targetObject
    */
    public function mapOrchestraIncomming(&$targetObject){
        $this->orchestra=$targetObject->getOrchestra();
    }
                        /**
    * get main_publisher
    */
    public function getMainpublisher(){
        return $this->main_publisher;
    }        
    /**
    * set main_publisher
    * @param $pMain_publisher
    */
    public function setMainpublisher($pMain_publisher){
        $this->main_publisher=$pMain_publisher;
    }
                    
    /**
    * map main_publisher
    * @param $targetObject
    */
    public function mapMainpublisher(&$targetObject){
        $targetObject->setmainPublisher($this->main_publisher);
    }
            
    /**
    * map main_publisher
    * @param $targetObject
    */
    public function mapMainpublisherIncomming(&$targetObject){
        $this->main_publisher=$targetObject->getMainpublisher();
    }
                        /**
    * get main_artist
    */
    public function getMainartist(){
        return $this->main_artist;
    }        
    /**
    * set main_artist
    * @param $pMain_artist
    */
    public function setMainartist($pMain_artist){
        $this->main_artist=$pMain_artist;
    }
                    
    /**
    * map main_artist
    * @param $targetObject
    */
    public function mapMainartist(&$targetObject){
        $targetObject->setmainArtist($this->main_artist);
    }
            
    /**
    * map main_artist
    * @param $targetObject
    */
    public function mapMainartistIncomming(&$targetObject){
        $this->main_artist=$targetObject->getMainartist();
    }
                        /**
    * get title
    */
    public function getTitle(){
        return $this->title;
    }        
    /**
    * set title
    * @param $pTitle
    */
    public function setTitle($pTitle){
        $this->title=$pTitle;
    }
                    
    /**
    * map title
    * @param $targetObject
    */
    public function mapTitle(&$targetObject){
        $targetObject->settitle($this->title);
    }
            
    /**
    * map title
    * @param $targetObject
    */
    public function mapTitleIncomming(&$targetObject){
        $this->title=$targetObject->getTitle();
    }
                        /**
    * get work
    */
    public function getWork(){
        return $this->work;
    }        
    /**
    * set work
    * @param $pWork
    */
    public function setWork($pWork){
        $this->work=$pWork;
    }
                    
    /**
    * map work
    * @param $targetObject
    */
    public function mapWork(&$targetObject){
        $targetObject->setwork($this->work);
    }
            
    /**
    * map work
    * @param $targetObject
    */
    public function mapWorkIncomming(&$targetObject){
        $this->work=$targetObject->getWork();
    }
                        /**
    * get is_live
    */
    public function getIslive(){
        return $this->is_live;
    }        
    /**
    * set is_live
    * @param $pIs_live
    */
    public function setIslive($pIs_live){
        $this->is_live=$pIs_live;
    }
                    
    /**
    * map is_live
    * @param $targetObject
    */
    public function mapIslive(&$targetObject){
        $targetObject->setisLive($this->is_live);
    }
            
    /**
    * map is_live
    * @param $targetObject
    */
    public function mapIsliveIncomming(&$targetObject){
        $this->is_live=$targetObject->getIslive();
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