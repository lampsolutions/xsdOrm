<?php

namespace Ivdm\Models;

class Audio {

            
    /**
    * EAN Code
 	* 
 	* Eancode des Anbieters
 	* 
 	* EAN oder UPC bzw. GTIN (entspricht dem Barcode
 	* des Produktes, alphanumerisch, EAN: 13- und 8-
 	* stellig, UPC: 12- und 7-stellig - ein UPC wird jeweils auf 13-Stellen mit einer "0" vorne aufgefüllt.
    */
    protected $ean;

            
    /**
    * Titel lang
 	* 
 	* CD Titelbezeichnung
 	* 
 	* max. 256 Zeichen
    */
    protected $titel_lang;

            
    /**
    * Titelergänzung
 	* 
 	* Ergänzung zum Titel, beliebige Zusatzinformation zum
 	* Produkt
 	* 
 	* seltener gefüllt / max. 256 Zeichen
    */
    protected $title_addition;

            
    /**
    * Artikelgruppe
 	* 
 	* Artikelgruppe
 	* 
 	* Artikelgruppen: 
 	* Musik
 	* 
    */
    protected $artikelgruppe;

            
    /**
    * Medium
 	* 
 	* Datenträger wie CD, DVD, Blu-ray, Blu-ray 3D, Blu-ray 4K usw.
 	* 
 	* Tonträgerformat (alphanumerisch, 256-stellig)
 	* 
    */
    protected $medium;

            
    /**
    * Anbieter
 	* 
 	* Anbieterstudio
 	* 
 	* PHONONET Kundenname
 	* max. 60 Zeichen
    */
    protected $anbieter;

            
    /**
    * Artikelnummer des Vertriebs
 	* 
 	* Bestell- bzw. Artikelnummer des Vertriebs/Anbieters
 	* 
 	* 
    */
    protected $art_vertrieb;

            
    /**
    * Komponist
 	* 
 	* Komponist
 	* 
 	* max. 254 Zeichen
    */
    protected $composer;

            
    /**
    * Künstler
 	* 
 	* Künstler des Artikels
 	* 
 	* alphanumerisch, 50 Zeichen
    */
    protected $artist;

            
    /**
    * Allgemeine Produktinformationen
 	* 
 	* Allgemeine Produktinformationen
 	* 
 	* 
    */
    protected $article_info;

            
    /**
    * Label
 	* 
 	* Name des Labels
 	* 
 	* Labelname (120 Zeichen, alphanumerisch)
    */
    protected $label;

            
    /**
    * VÖ-Datum
 	* 
 	* Veröffentlichungsdatum 
 	* 
 	* Veröffentlichungsdatum (frühestmögliches
 	* Kaufdatum)
    */
    protected $voe_datum;

            
    /**
    * letzte Änderung
 	* 
 	* letzte Änderung am Artikel - Datum
 	* 
 	* Hier wird die letzte Änderung am Artikel dokumentiert
    */
    protected $letzt_aenderung;

            
    /**
    * Verpackungseinheit
 	* 
 	* Verpackungseinheit, entspricht der Abgabeeinheit
 	* des Lieferanten: Inhalt pro Standard-
 	* Verpackungseinheit in Stück (numerisch, 5-stellig)
 	* 
 	* 
    */
    protected $packing_unit;

            
    /**
    * Anzahl Discs
 	* 
 	* Set-Inhalt (Anzahl der Tonträger im Set, numerisch, 3-
 	* stellig)
 	* 
 	* Ziffer
    */
    protected $discanzahl;

            
    /**
    * Hauptgenre
 	* 
 	* Hauptgenre (hier wird die Grundrichtung noch spezifiziert)
 	* 
 	* Einzelauflistung bei mehreren Genres
    */
    protected $hauptgenre;

            
    /**
    * Bis zu fünf Genre-Schlagwörter / Keywords
 	* 
 	* Bis zu fünf Genre-Schlagwörter für ein Produkt
 	* möglich (Angabe in Nummerncodes, 10-stellig)
 	* 
 	* Codeliste siehe unter www.phononet.de
    */
    protected $Keyword_1;

            
    /**
    * Bis zu fünf Genre-Schlagwörter / Keywords
 	* 
 	* Bis zu fünf Genre-Schlagwörter für ein Produkt
 	* möglich (Angabe in Nummerncodes, 10-stellig)
 	* 
 	* Codeliste siehe unter www.phononet.de
    */
    protected $Keyword_2;

            
    /**
    * Bis zu fünf Genre-Schlagwörter / Keywords
 	* 
 	* Bis zu fünf Genre-Schlagwörter für ein Produkt
 	* möglich (Angabe in Nummerncodes, 10-stellig)
 	* 
 	* Codeliste siehe unter www.phononet.de
    */
    protected $Keyword_3;

            
    /**
    * Bis zu fünf Genre-Schlagwörter / Keywords
 	* 
 	* Bis zu fünf Genre-Schlagwörter für ein Produkt
 	* möglich (Angabe in Nummerncodes, 10-stellig)
 	* 
 	* Codeliste siehe unter www.phononet.de
    */
    protected $Keyword_4;

            
    /**
    * Bis zu fünf Genre-Schlagwörter / Keywords
 	* 
 	* Bis zu fünf Genre-Schlagwörter für ein Produkt
 	* möglich (Angabe in Nummerncodes, 10-stellig)
 	* 
 	* Codeliste siehe unter www.phononet.de
    */
    protected $Keyword_5;

            
    /**
    * Coverfront
 	* 
 	* Bild Cover (Vorderseite) / Frontcover / Packshot
 	* 
 	* max. 600px Größe
    */
    protected $cover_vorne;

            
    /**
    * Coverback
 	* 
 	* Bild Rückcover (Rückseite) / Backcover / Packshot
 	* 
 	* 
    */
    protected $cover_hinten;

            
    /**
    * Anzahl der Tracks auf dem Medium
 	* 
 	* 
    */
    protected $number_of_tracks;

            
    /**
    * Track- oder Gesamtspieldauer 
 	* 
 	* Track- oder Gesamtspieldauer (mmmss)
    */
    protected $playtime;

    
                /**
    * get ean
    */
    public function getEan(){
        return $this->ean;
    }        
    /**
    * set ean
    * @param $pEan
    */
    public function setEan($pEan){
        $this->ean=$pEan;
    }
                    
    /**
    * map ean
    * @param $targetObject
    */
    public function mapEan(&$targetObject){
        $targetObject->eanUpc=$this->ean;
    }
            
    /**
    * map ean
    * @param $targetObject
    */
    public function mapEanIncommung(&$targetObject){
        $this->ean=$targetObject->getEanupc;
    }
                        /**
    * get titel_lang
    */
    public function getTitel_lang(){
        return $this->titel_lang;
    }        
    /**
    * set titel_lang
    * @param $pTitel_lang
    */
    public function setTitel_lang($pTitel_lang){
        $this->titel_lang=$pTitel_lang;
    }
                    
    /**
    * map titel_lang
    * @param $targetObject
    */
    public function mapTitellang(&$targetObject){
        $targetObject->title=$this->titel_lang;
    }
            
    /**
    * map titel_lang
    * @param $targetObject
    */
    public function mapTitellangIncommung(&$targetObject){
        $this->titel_lang=$targetObject->getTitle;
    }
                        /**
    * get title_addition
    */
    public function getTitle_addition(){
        return $this->title_addition;
    }        
    /**
    * set title_addition
    * @param $pTitle_addition
    */
    public function setTitle_addition($pTitle_addition){
        $this->title_addition=$pTitle_addition;
    }
                    
    /**
    * map title_addition
    * @param $targetObject
    */
    public function mapTitleaddition(&$targetObject){
        $targetObject->titleAddition=$this->title_addition;
    }
            
    /**
    * map title_addition
    * @param $targetObject
    */
    public function mapTitleadditionIncommung(&$targetObject){
        $this->title_addition=$targetObject->getTitleaddition;
    }
                        /**
    * get artikelgruppe
    */
    public function getArtikelgruppe(){
        return $this->artikelgruppe;
    }        
    /**
    * set artikelgruppe
    * @param $pArtikelgruppe
    */
    public function setArtikelgruppe($pArtikelgruppe){
        $this->artikelgruppe=$pArtikelgruppe;
    }
                        /**
    * get medium
    */
    public function getMedium(){
        return $this->medium;
    }        
    /**
    * set medium
    * @param $pMedium
    */
    public function setMedium($pMedium){
        $this->medium=$pMedium;
    }
                    
    /**
    * map medium
    * @param $targetObject
    */
    public function mapMedium(&$targetObject){
        $targetObject->configuration=$this->medium;
    }
            
    /**
    * map medium
    * @param $targetObject
    */
    public function mapMediumIncommung(&$targetObject){
        $this->medium=$targetObject->getConfiguration;
    }
                        /**
    * get anbieter
    */
    public function getAnbieter(){
        return $this->anbieter;
    }        
    /**
    * set anbieter
    * @param $pAnbieter
    */
    public function setAnbieter($pAnbieter){
        $this->anbieter=$pAnbieter;
    }
                    
    /**
    * map anbieter
    * @param $targetObject
    */
    public function mapAnbieter(&$targetObject){
        $targetObject->distributorName=$this->anbieter;
    }
            
    /**
    * map anbieter
    * @param $targetObject
    */
    public function mapAnbieterIncommung(&$targetObject){
        $this->anbieter=$targetObject->getDistributorname;
    }
                        /**
    * get art_vertrieb
    */
    public function getArt_vertrieb(){
        return $this->art_vertrieb;
    }        
    /**
    * set art_vertrieb
    * @param $pArt_vertrieb
    */
    public function setArt_vertrieb($pArt_vertrieb){
        $this->art_vertrieb=$pArt_vertrieb;
    }
                    
    /**
    * map art_vertrieb
    * @param $targetObject
    */
    public function mapArtvertrieb(&$targetObject){
        $targetObject->articleNumber=$this->art_vertrieb;
    }
            
    /**
    * map art_vertrieb
    * @param $targetObject
    */
    public function mapArtvertriebIncommung(&$targetObject){
        $this->art_vertrieb=$targetObject->getArticlenumber;
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
        $targetObject->composer=$this->composer;
    }
            
    /**
    * map composer
    * @param $targetObject
    */
    public function mapComposerIncommung(&$targetObject){
        $this->composer=$targetObject->getComposer;
    }
                        /**
    * get artist
    */
    public function getArtist(){
        return $this->artist;
    }        
    /**
    * set artist
    * @param $pArtist
    */
    public function setArtist($pArtist){
        $this->artist=$pArtist;
    }
                    
    /**
    * map artist
    * @param $targetObject
    */
    public function mapArtist(&$targetObject){
        $targetObject->artist=$this->artist;
    }
            
    /**
    * map artist
    * @param $targetObject
    */
    public function mapArtistIncommung(&$targetObject){
        $this->artist=$targetObject->getArtist;
    }
                        /**
    * get article_info
    */
    public function getArticle_info(){
        return $this->article_info;
    }        
    /**
    * set article_info
    * @param $pArticle_info
    */
    public function setArticle_info($pArticle_info){
        $this->article_info=$pArticle_info;
    }
                    
    /**
    * map article_info
    * @param $targetObject
    */
    public function mapArticleinfo(&$targetObject){
        $targetObject->articleInfo=$this->article_info;
    }
            
    /**
    * map article_info
    * @param $targetObject
    */
    public function mapArticleinfoIncommung(&$targetObject){
        $this->article_info=$targetObject->getArticleinfo;
    }
                        /**
    * get label
    */
    public function getLabel(){
        return $this->label;
    }        
    /**
    * set label
    * @param $pLabel
    */
    public function setLabel($pLabel){
        $this->label=$pLabel;
    }
                    
    /**
    * map label
    * @param $targetObject
    */
    public function mapLabel(&$targetObject){
        $targetObject->labelName=$this->label;
    }
            
    /**
    * map label
    * @param $targetObject
    */
    public function mapLabelIncommung(&$targetObject){
        $this->label=$targetObject->getLabelname;
    }
                        /**
    * get voe_datum
    */
    public function getVoe_datum(){
        return $this->voe_datum;
    }        
    /**
    * set voe_datum
    * @param $pVoe_datum
    */
    public function setVoe_datum($pVoe_datum){
        $this->voe_datum=$pVoe_datum;
    }
                    
    /**
    * map voe_datum
    * @param $targetObject
    */
    public function mapVoedatum(&$targetObject){
        $targetObject->physicalReleaseDate=$this->voe_datum;
    }
            
    /**
    * map voe_datum
    * @param $targetObject
    */
    public function mapVoedatumIncommung(&$targetObject){
        $this->voe_datum=$targetObject->getPhysicalreleasedate;
    }
                        /**
    * get letzt_aenderung
    */
    public function getLetzt_aenderung(){
        return $this->letzt_aenderung;
    }        
    /**
    * set letzt_aenderung
    * @param $pLetzt_aenderung
    */
    public function setLetzt_aenderung($pLetzt_aenderung){
        $this->letzt_aenderung=$pLetzt_aenderung;
    }
                    
    /**
    * map letzt_aenderung
    * @param $targetObject
    */
    public function mapLetztaenderung(&$targetObject){
        $targetObject->dateOfChange=$this->letzt_aenderung;
    }
            
    /**
    * map letzt_aenderung
    * @param $targetObject
    */
    public function mapLetztaenderungIncommung(&$targetObject){
        $this->letzt_aenderung=$targetObject->getDateofchange;
    }
                        /**
    * get packing_unit
    */
    public function getPacking_unit(){
        return $this->packing_unit;
    }        
    /**
    * set packing_unit
    * @param $pPacking_unit
    */
    public function setPacking_unit($pPacking_unit){
        $this->packing_unit=$pPacking_unit;
    }
                    
    /**
    * map packing_unit
    * @param $targetObject
    */
    public function mapPackingunit(&$targetObject){
        $targetObject->packingUnit=$this->packing_unit;
    }
            
    /**
    * map packing_unit
    * @param $targetObject
    */
    public function mapPackingunitIncommung(&$targetObject){
        $this->packing_unit=$targetObject->getPackingunit;
    }
                        /**
    * get discanzahl
    */
    public function getDiscanzahl(){
        return $this->discanzahl;
    }        
    /**
    * set discanzahl
    * @param $pDiscanzahl
    */
    public function setDiscanzahl($pDiscanzahl){
        $this->discanzahl=$pDiscanzahl;
    }
                    
    /**
    * map discanzahl
    * @param $targetObject
    */
    public function mapDiscanzahl(&$targetObject){
        $targetObject->setTotal=$this->discanzahl;
    }
            
    /**
    * map discanzahl
    * @param $targetObject
    */
    public function mapDiscanzahlIncommung(&$targetObject){
        $this->discanzahl=$targetObject->getSettotal;
    }
                        /**
    * get hauptgenre
    */
    public function getHauptgenre(){
        return $this->hauptgenre;
    }        
    /**
    * set hauptgenre
    * @param $pHauptgenre
    */
    public function setHauptgenre($pHauptgenre){
        $this->hauptgenre=$pHauptgenre;
    }
                    
    /**
    * map hauptgenre
    * @param $targetObject
    */
    public function mapHauptgenre(&$targetObject){
        $targetObject->genre=$this->hauptgenre;
    }
            
    /**
    * map hauptgenre
    * @param $targetObject
    */
    public function mapHauptgenreIncommung(&$targetObject){
        $this->hauptgenre=$targetObject->getGenre;
    }
                        /**
    * get Keyword_1
    */
    public function getKeyword_1(){
        return $this->Keyword_1;
    }        
    /**
    * set Keyword_1
    * @param $pKeyword_1
    */
    public function setKeyword_1($pKeyword_1){
        $this->Keyword_1=$pKeyword_1;
    }
                    
    /**
    * map Keyword_1
    * @param $targetObject
    */
    public function mapKeyword1(&$targetObject){
        $targetObject->keyword1=$this->Keyword_1;
    }
            
    /**
    * map Keyword_1
    * @param $targetObject
    */
    public function mapKeyword1Incommung(&$targetObject){
        $this->Keyword_1=$targetObject->getKeyword1;
    }
                        /**
    * get Keyword_2
    */
    public function getKeyword_2(){
        return $this->Keyword_2;
    }        
    /**
    * set Keyword_2
    * @param $pKeyword_2
    */
    public function setKeyword_2($pKeyword_2){
        $this->Keyword_2=$pKeyword_2;
    }
                    
    /**
    * map Keyword_2
    * @param $targetObject
    */
    public function mapKeyword2(&$targetObject){
        $targetObject->keyword2=$this->Keyword_2;
    }
            
    /**
    * map Keyword_2
    * @param $targetObject
    */
    public function mapKeyword2Incommung(&$targetObject){
        $this->Keyword_2=$targetObject->getKeyword2;
    }
                        /**
    * get Keyword_3
    */
    public function getKeyword_3(){
        return $this->Keyword_3;
    }        
    /**
    * set Keyword_3
    * @param $pKeyword_3
    */
    public function setKeyword_3($pKeyword_3){
        $this->Keyword_3=$pKeyword_3;
    }
                    
    /**
    * map Keyword_3
    * @param $targetObject
    */
    public function mapKeyword3(&$targetObject){
        $targetObject->keyword3=$this->Keyword_3;
    }
            
    /**
    * map Keyword_3
    * @param $targetObject
    */
    public function mapKeyword3Incommung(&$targetObject){
        $this->Keyword_3=$targetObject->getKeyword3;
    }
                        /**
    * get Keyword_4
    */
    public function getKeyword_4(){
        return $this->Keyword_4;
    }        
    /**
    * set Keyword_4
    * @param $pKeyword_4
    */
    public function setKeyword_4($pKeyword_4){
        $this->Keyword_4=$pKeyword_4;
    }
                    
    /**
    * map Keyword_4
    * @param $targetObject
    */
    public function mapKeyword4(&$targetObject){
        $targetObject->keyword4=$this->Keyword_4;
    }
            
    /**
    * map Keyword_4
    * @param $targetObject
    */
    public function mapKeyword4Incommung(&$targetObject){
        $this->Keyword_4=$targetObject->getKeyword4;
    }
                        /**
    * get Keyword_5
    */
    public function getKeyword_5(){
        return $this->Keyword_5;
    }        
    /**
    * set Keyword_5
    * @param $pKeyword_5
    */
    public function setKeyword_5($pKeyword_5){
        $this->Keyword_5=$pKeyword_5;
    }
                    
    /**
    * map Keyword_5
    * @param $targetObject
    */
    public function mapKeyword5(&$targetObject){
        $targetObject->keyword5=$this->Keyword_5;
    }
            
    /**
    * map Keyword_5
    * @param $targetObject
    */
    public function mapKeyword5Incommung(&$targetObject){
        $this->Keyword_5=$targetObject->getKeyword5;
    }
                        /**
    * get cover_vorne
    */
    public function getCover_vorne(){
        return $this->cover_vorne;
    }        
    /**
    * set cover_vorne
    * @param $pCover_vorne
    */
    public function setCover_vorne($pCover_vorne){
        $this->cover_vorne=$pCover_vorne;
    }
                    
    /**
    * map cover_vorne
    * @param $targetObject
    */
    public function mapCovervorne(&$targetObject){
        $targetObject->artwork[0]=$this->cover_vorne;
    }
            
    /**
    * map cover_vorne
    * @param $targetObject
    */
    public function mapCovervorneIncommung(&$targetObject){
        $this->cover_vorne=$targetObject->getArtwork[0];
    }
                        /**
    * get cover_hinten
    */
    public function getCover_hinten(){
        return $this->cover_hinten;
    }        
    /**
    * set cover_hinten
    * @param $pCover_hinten
    */
    public function setCover_hinten($pCover_hinten){
        $this->cover_hinten=$pCover_hinten;
    }
                    
    /**
    * map cover_hinten
    * @param $targetObject
    */
    public function mapCoverhinten(&$targetObject){
        $targetObject->artwork[1]=$this->cover_hinten;
    }
            
    /**
    * map cover_hinten
    * @param $targetObject
    */
    public function mapCoverhintenIncommung(&$targetObject){
        $this->cover_hinten=$targetObject->getArtwork[1];
    }
                        /**
    * get number_of_tracks
    */
    public function getNumber_of_tracks(){
        return $this->number_of_tracks;
    }        
    /**
    * set number_of_tracks
    * @param $pNumber_of_tracks
    */
    public function setNumber_of_tracks($pNumber_of_tracks){
        $this->number_of_tracks=$pNumber_of_tracks;
    }
                    
    /**
    * map number_of_tracks
    * @param $targetObject
    */
    public function mapNumberoftracks(&$targetObject){
        $targetObject->numberOfTracks=$this->number_of_tracks;
    }
            
    /**
    * map number_of_tracks
    * @param $targetObject
    */
    public function mapNumberoftracksIncommung(&$targetObject){
        $this->number_of_tracks=$targetObject->getNumberoftracks;
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
        $targetObject->playtime=$this->playtime;
    }
            
    /**
    * map playtime
    * @param $targetObject
    */
    public function mapPlaytimeIncommung(&$targetObject){
        $this->playtime=$targetObject->getPlaytime;
    }
            

}