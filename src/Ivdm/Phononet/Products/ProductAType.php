<?php

namespace Ivdm\Phononet\Products;

/**
 * Class representing ProductAType
 */
class ProductAType {

    /**
     * Supplier-specific (internal) article number (not EAN) 0020009001
     *
     * @property string $articleNumber
     */
    private $articleNumber = null;

    /**
     * GTIN always 13 digits 0020007001
     *
     * @property string $gtin
     */
    private $gtin = null;

    /**
     * >EAN (European Articel Number) 13 digits, UPC (US Product Code) 12 digits
     * 0020007001
     *
     * @property string $eanUpc
     */
    private $eanUpc = null;

    /**
     * EAN 13 digits, UPC 12 digits after change
     *
     * @property string $eanUpcOld
     */
    private $eanUpcOld = null;

    /**
     * ISBN 0020007002
     *
     * @property string $iSBN13
     */
    private $iSBN13 = null;

    /**
     * New EAN, UPC or ISBN 0020019001
     *
     * @property string $eanUpcNew
     */
    private $eanUpcNew = null;

    /**
     * Phononet customer number 0020005001
     *
     * @property string $distributorNumber
     */
    private $distributorNumber = null;

    /**
     * Phononet customer name
     *
     * @property string $distributorName
     */
    private $distributorName = null;

    /**
     * Customer number before reallocation 0020005002
     *
     * @property string $distributorNumberOld
     */
    private $distributorNumberOld = null;

    /**
     * Configuration number 0020010005
     *
     * @property string $configurationNumber
     */
    private $configurationNumber = null;

    /**
     * Configuration (product type) text
     *
     * @property mixed $configuration
     */
    private $configuration = null;

    /**
     * Main artist 0020010002
     *
     * @property mixed $artist
     */
    private $artist = null;

    /**
     * Title (50-characters, alphanumeric) 0020010001
     *
     * @property string $title
     */
    private $title = null;

    /**
     * Composer 0020010003
     *
     * @property mixed $composer
     */
    private $composer = null;

    /**
     * Title addition 0020014001
     *
     * @property string $titleAddition
     */
    private $titleAddition = null;

    /**
     * DVD regional code (two digits) 002001006
     *
     * @property string $dvdRegionalCode
     */
    private $dvdRegionalCode = null;

    /**
     * Actor (DVD movie) 0020010007
     *
     * @property string $actor
     */
    private $actor = null;

    /**
     * Languages supported (DVD movie) 0020010008
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Movie aspect ratio, e.g. 16:9 (DVD movie) 0020010009
     *
     * @property string $aspectRatio
     */
    private $aspectRatio = null;

    /**
     * Studio information (DVD movie) 0020010010
     *
     * @property string $studio
     */
    private $studio = null;

    /**
     * Total playtime (DVD movie) 0020010011
     *
     * @property string $totalPlaytime
     */
    private $totalPlaytime = null;

    /**
     * Features (DVD movie) 0020010012
     *
     * @property string $features
     */
    private $features = null;

    /**
     * Sound format (DVD movie) 0020010013
     *
     * @property string $soundFormat
     */
    private $soundFormat = null;

    /**
     * General product information 00200100014
     *
     * @property string $articleInfo
     */
    private $articleInfo = null;

    /**
     * Subtitle information 0020010015
     *
     * @property string $subtitle
     */
    private $subtitle = null;

    /**
     * Original title 0020010016
     *
     * @property string $originalTitle
     */
    private $originalTitle = null;

    /**
     * ISO code 0020010017
     *
     * @property string $languageCode
     */
    private $languageCode = null;

    /**
     * Book author or screenwriter 0020010018
     *
     * @property string $author
     */
    private $author = null;

    /**
     * Product consists of n sets of physical media 0020011001
     *
     * @property integer $setTotal
     */
    private $setTotal = null;

    /**
     * Content of standard packaging unit in pieces 0020011002
     *
     * @property integer $packingUnit
     */
    private $packingUnit = null;

    /**
     * Movie director 0020016001
     *
     * @property string $movieDirector
     */
    private $movieDirector = null;

    /**
     * National / international N/I 0020018003
     *
     * @property string $origin
     */
    private $origin = null;

    /**
     * J for copy protection, N for no copy protection 0020018005
     *
     * @property boolean $isCopyprotected
     */
    private $isCopyprotected = null;

    /**
     * Information on textiles 0020021001
     *
     * @property string $textileInformation
     */
    private $textileInformation = null;

    /**
     * Size information for textiles 0020022001
     *
     * @property string $size
     */
    private $size = null;

    /**
     * Color information for textiles 0020023001
     *
     * @property string $color
     */
    private $color = null;

    /**
     * Label name 0020006004
     *
     * @property string $labelName
     */
    private $labelName = null;

    /**
     * First 10 characters of GVL label name (recommended) 0020006002
     *
     * @property mixed $labelShortName
     */
    private $labelShortName = null;

    /**
     * GVL Labelcode 0020006003
     *
     * @property string $labelCode
     */
    private $labelCode = null;

    /**
     * Film ratings, german FSK (Freiwillige Selbstkontrolle) 0020017001
     *
     * @property mixed $fSK
     */
    private $fSK = null;

    /**
     * Recommended age minimum 0020017002
     *
     * @property string $recommendedAge
     */
    private $recommendedAge = null;

    /**
     * PEGI age recommendation 0020017051
     *
     * @property string $pEGIRecommendedAge
     */
    private $pEGIRecommendedAge = null;

    /**
     * PEGI warning 0020017052 - 0020017059, values: violence, bad_language, fear,
     * drug_abuse, sex, discrimination, gambling, online
     *
     * @property string $pEGI
     */
    private $pEGI = null;

    /**
     * Subdistribution code 0020006001
     *
     * @property string $salesArea
     */
    private $salesArea = null;

    /**
     * Current price code 0020012001
     *
     * @property string $priceCode
     */
    private $priceCode = null;

    /**
     * Future price code 0020012005
     *
     * @property string $priceCodeNew
     */
    private $priceCodeNew = null;

    /**
     * Information about estimated activation date of new priccode 0020013003
     *
     * @property \DateTime $priceCodeNewValidFrom
     */
    private $priceCodeNewValidFrom = null;

    /**
     * Wholesale price CHF 0020012002
     *
     * @property string $wholesalePriceCHF
     */
    private $wholesalePriceCHF = null;

    /**
     * Charity donation CHF included in price 0020012003
     *
     * @property float $charityDonationCHF
     */
    private $charityDonationCHF = null;

    /**
     * Recommended retail price CHF 0020012004
     *
     * @property mixed $recommendedRetailPriceCHF
     */
    private $recommendedRetailPriceCHF = null;

    /**
     * Future wholesale price CHF 0020012006
     *
     * @property string $wholesalePriceCHFNew
     */
    private $wholesalePriceCHFNew = null;

    /**
     * Future charity donation CHF included in price 0020012007
     *
     * @property float $charityDonationCHFNew
     */
    private $charityDonationCHFNew = null;

    /**
     * Future recommended retail price CHF 0020012008
     *
     * @property mixed $recommendedRetailPriceCHFNew
     */
    private $recommendedRetailPriceCHFNew = null;

    /**
     * Wholesale price EUR 0020012009
     *
     * @property string $wholesalePriceEUR
     */
    private $wholesalePriceEUR = null;

    /**
     * Charity donation EUR included in price 0020012010
     *
     * @property float $charityDonationEUR
     */
    private $charityDonationEUR = null;

    /**
     * Recommended retail price EUR 0020012011
     *
     * @property mixed $recommendedRetailPriceEUR
     */
    private $recommendedRetailPriceEUR = null;

    /**
     * Future wholesale price EUR 0020012012
     *
     * @property string $wholesalePriceEURNew
     */
    private $wholesalePriceEURNew = null;

    /**
     * Future charity donation EUR included in price 0020012013
     *
     * @property float $charityDonationEURNew
     */
    private $charityDonationEURNew = null;

    /**
     * Future recommended retail price EUR 0020012014
     *
     * @property mixed $recommendedRetailPriceEURNew
     */
    private $recommendedRetailPriceEURNew = null;

    /**
     * VAT code 0=no VAT, 1=reduced VAT, 2=full VAT 0020012051
     *
     * @property string $vATCode
     */
    private $vATCode = null;

    /**
     * Price categories: High, Medium, Budget 0020018004
     *
     * @property string $priceCategory
     */
    private $priceCategory = null;

    /**
     * Product available J/N 0020018001
     *
     * @property string $available
     */
    private $available = null;

    /**
     * Product availablility 0-9 0020018001
     *
     * @property string $availability
     */
    private $availability = null;

    /**
     * Media advertising J/N 0020018002
     *
     * @property string $mediaPromotion
     */
    private $mediaPromotion = null;

    /**
     * Net price indicator J/N 0020018008
     *
     * @property string $netPrice
     */
    private $netPrice = null;

    /**
     * Price fixed in accordance with german book price binding 0020018009
     *
     * @property string $priceFix
     */
    private $priceFix = null;

    /**
     * Marketing unit for distribution 0020020001
     *
     * @property string $marketingUnit
     */
    private $marketingUnit = null;

    /**
     * Promotion campaign blocked from this date 0020018006
     *
     * @property \DateTime $campaignBlockedFrom
     */
    private $campaignBlockedFrom = null;

    /**
     * Promotion campaign blocked until this date 0020018007
     *
     * @property \DateTime $campaignBlockedUntil
     */
    private $campaignBlockedUntil = null;

    /**
     * Date of release: first day of availability of physical product in stores
     * 0020013001
     *
     * @property mixed $physicalReleaseDate
     */
    private $physicalReleaseDate = null;

    /**
     * Cancellation date of physical product 0020013002
     *
     * @property mixed $physicalCancellationDate
     */
    private $physicalCancellationDate = null;

    /**
     * Mode of article: 1=new, 2=changed, 3=canceled 0020008001
     *
     * @property string $changeMode
     */
    private $changeMode = null;

    /**
     * Frontline/catalog indicator F/K 0020020002
     *
     * @property string $frontline
     */
    private $frontline = null;

    /**
     * Marketing information 0020010051
     *
     * @property string $marketingText
     */
    private $marketingText = null;

    /**
     * Height of rack unit in mm 0020050001
     *
     * @property integer $rackHeight
     */
    private $rackHeight = null;

    /**
     * Depth of rack unit in mm 0020050002
     *
     * @property integer $rackDepth
     */
    private $rackDepth = null;

    /**
     * Width of rack unit in mm 0020050003
     *
     * @property integer $rackWidth
     */
    private $rackWidth = null;

    /**
     * Gross weight of article in g 0020050004
     *
     * @property integer $grossWeight
     */
    private $grossWeight = null;

    /**
     * Information to german dual system waste disposal 0020051001
     *
     * @property string $dualSystem
     */
    private $dualSystem = null;

    /**
     * Last possible return application date 0020018010
     *
     * @property \DateTime $lastReturnShipmentApplicationDate
     */
    private $lastReturnShipmentApplicationDate = null;

    /**
     * J for returnable, N for not returnable 0020018011
     *
     * @property boolean $returnable
     */
    private $returnable = null;

    /**
     * 3 digit genre code 0020010004
     *
     * @property integer $genreCode
     */
    private $genreCode = null;

    /**
     * Product genre
     *
     * @property mixed $genre
     */
    private $genre = null;

    /**
     * Genre keyword code 1 for product 0020015001
     *
     * @property mixed $keywordCode1
     */
    private $keywordCode1 = null;

    /**
     * Genre keyword code 2 for product product 0020015002
     *
     * @property mixed $keywordCode2
     */
    private $keywordCode2 = null;

    /**
     * Genre keyword code 3 for product product 0020015003
     *
     * @property mixed $keywordCode3
     */
    private $keywordCode3 = null;

    /**
     * Genre keyword code 4 for product product 0020015004
     *
     * @property mixed $keywordCode4
     */
    private $keywordCode4 = null;

    /**
     * Genre keyword code 5 for product product 0020015005
     *
     * @property mixed $keywordCode5
     */
    private $keywordCode5 = null;

    /**
     * Genre keyword 1 for product
     *
     * @property string $keyword1
     */
    private $keyword1 = null;

    /**
     * Genre keyword 2 for product
     *
     * @property string $keyword2
     */
    private $keyword2 = null;

    /**
     * Genre keyword 3 for product
     *
     * @property string $keyword3
     */
    private $keyword3 = null;

    /**
     * Genre keyword 4 for product
     *
     * @property string $keyword4
     */
    private $keyword4 = null;

    /**
     * Genre keyword 5 for product
     *
     * @property string $keyword5
     */
    private $keyword5 = null;

    /**
     * Keyword tags for searching, etc. up to 120 characters 0020015006
     *
     * @property string $keywordTags
     */
    private $keywordTags = null;

    /**
     * List of tracks
     *
     * @property \Ivdm\Phononet\Tracks $tracks
     */
    private $tracks = null;

    /**
     * Artwork - cover, front or booklet
     *
     * @property \Ivdm\Phononet\TArtworkPictureType[] $artwork
     */
    private $artwork = null;

    /**
     * 0020013004
     *
     * @property \DateTime $dateOfChange
     */
    private $dateOfChange = null;

    /**
     * Gets as articleNumber
     *
     * Supplier-specific (internal) article number (not EAN) 0020009001
     *
     * @return string
     */
    public function getArticleNumber() {
        return $this->articleNumber;
    }

    /**
     * Sets a new articleNumber
     *
     * Supplier-specific (internal) article number (not EAN) 0020009001
     *
     * @param string $articleNumber
     * @return self
     */
    public function setArticleNumber($articleNumber) {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    /**
     * Gets as gtin
     *
     * GTIN always 13 digits 0020007001
     *
     * @return string
     */
    public function getGtin() {
        return $this->gtin;
    }

    /**
     * Sets a new gtin
     *
     * GTIN always 13 digits 0020007001
     *
     * @param string $gtin
     * @return self
     */
    public function setGtin($gtin) {
        $this->gtin = $gtin;
        return $this;
    }

    /**
     * Gets as eanUpc
     *
     * >EAN (European Articel Number) 13 digits, UPC (US Product Code) 12 digits
     * 0020007001
     *
     * @return string
     */
    public function getEanUpc() {
        return $this->eanUpc;
    }

    /**
     * Sets a new eanUpc
     *
     * >EAN (European Articel Number) 13 digits, UPC (US Product Code) 12 digits
     * 0020007001
     *
     * @param string $eanUpc
     * @return self
     */
    public function setEanUpc($eanUpc) {
        $this->eanUpc = $eanUpc;
        return $this;
    }

    /**
     * Gets as eanUpcOld
     *
     * EAN 13 digits, UPC 12 digits after change
     *
     * @return string
     */
    public function getEanUpcOld() {
        return $this->eanUpcOld;
    }

    /**
     * Sets a new eanUpcOld
     *
     * EAN 13 digits, UPC 12 digits after change
     *
     * @param string $eanUpcOld
     * @return self
     */
    public function setEanUpcOld($eanUpcOld) {
        $this->eanUpcOld = $eanUpcOld;
        return $this;
    }

    /**
     * Gets as iSBN13
     *
     * ISBN 0020007002
     *
     * @return string
     */
    public function getISBN13() {
        return $this->iSBN13;
    }

    /**
     * Sets a new iSBN13
     *
     * ISBN 0020007002
     *
     * @param string $iSBN13
     * @return self
     */
    public function setISBN13($iSBN13) {
        $this->iSBN13 = $iSBN13;
        return $this;
    }

    /**
     * Gets as eanUpcNew
     *
     * New EAN, UPC or ISBN 0020019001
     *
     * @return string
     */
    public function getEanUpcNew() {
        return $this->eanUpcNew;
    }

    /**
     * Sets a new eanUpcNew
     *
     * New EAN, UPC or ISBN 0020019001
     *
     * @param string $eanUpcNew
     * @return self
     */
    public function setEanUpcNew($eanUpcNew) {
        $this->eanUpcNew = $eanUpcNew;
        return $this;
    }

    /**
     * Gets as distributorNumber
     *
     * Phononet customer number 0020005001
     *
     * @return string
     */
    public function getDistributorNumber() {
        return $this->distributorNumber;
    }

    /**
     * Sets a new distributorNumber
     *
     * Phononet customer number 0020005001
     *
     * @param string $distributorNumber
     * @return self
     */
    public function setDistributorNumber($distributorNumber) {
        $this->distributorNumber = $distributorNumber;
        return $this;
    }

    /**
     * Gets as distributorName
     *
     * Phononet customer name
     *
     * @return string
     */
    public function getDistributorName() {
        return $this->distributorName;
    }

    /**
     * Sets a new distributorName
     *
     * Phononet customer name
     *
     * @param string $distributorName
     * @return self
     */
    public function setDistributorName($distributorName) {
        $this->distributorName = $distributorName;
        return $this;
    }

    /**
     * Gets as distributorNumberOld
     *
     * Customer number before reallocation 0020005002
     *
     * @return string
     */
    public function getDistributorNumberOld() {
        return $this->distributorNumberOld;
    }

    /**
     * Sets a new distributorNumberOld
     *
     * Customer number before reallocation 0020005002
     *
     * @param string $distributorNumberOld
     * @return self
     */
    public function setDistributorNumberOld($distributorNumberOld) {
        $this->distributorNumberOld = $distributorNumberOld;
        return $this;
    }

    /**
     * Gets as configurationNumber
     *
     * Configuration number 0020010005
     *
     * @return string
     */
    public function getConfigurationNumber() {
        return $this->configurationNumber;
    }

    /**
     * Sets a new configurationNumber
     *
     * Configuration number 0020010005
     *
     * @param string $configurationNumber
     * @return self
     */
    public function setConfigurationNumber($configurationNumber) {
        $this->configurationNumber = $configurationNumber;
        return $this;
    }

    /**
     * Gets as configuration
     *
     * Configuration (product type) text
     *
     * @return mixed
     */
    public function getConfiguration() {
        return $this->configuration;
    }

    /**
     * Sets a new configuration
     *
     * Configuration (product type) text
     *
     * @param mixed $configuration
     * @return self
     */
    public function setConfiguration($configuration) {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Gets as artist
     *
     * Main artist 0020010002
     *
     * @return mixed
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Sets a new artist
     *
     * Main artist 0020010002
     *
     * @param mixed $artist
     * @return self
     */
    public function setArtist($artist) {
        $this->artist = $artist;
        return $this;
    }

    /**
     * Gets as title
     *
     * Title (50-characters, alphanumeric) 0020010001
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Title (50-characters, alphanumeric) 0020010001
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as composer
     *
     * Composer 0020010003
     *
     * @return mixed
     */
    public function getComposer() {
        return $this->composer;
    }

    /**
     * Sets a new composer
     *
     * Composer 0020010003
     *
     * @param mixed $composer
     * @return self
     */
    public function setComposer($composer) {
        $this->composer = $composer;
        return $this;
    }

    /**
     * Gets as titleAddition
     *
     * Title addition 0020014001
     *
     * @return string
     */
    public function getTitleAddition() {
        return $this->titleAddition;
    }

    /**
     * Sets a new titleAddition
     *
     * Title addition 0020014001
     *
     * @param string $titleAddition
     * @return self
     */
    public function setTitleAddition($titleAddition) {
        $this->titleAddition = $titleAddition;
        return $this;
    }

    /**
     * Gets as dvdRegionalCode
     *
     * DVD regional code (two digits) 002001006
     *
     * @return string
     */
    public function getDvdRegionalCode() {
        return $this->dvdRegionalCode;
    }

    /**
     * Sets a new dvdRegionalCode
     *
     * DVD regional code (two digits) 002001006
     *
     * @param string $dvdRegionalCode
     * @return self
     */
    public function setDvdRegionalCode($dvdRegionalCode) {
        $this->dvdRegionalCode = $dvdRegionalCode;
        return $this;
    }

    /**
     * Gets as actor
     *
     * Actor (DVD movie) 0020010007
     *
     * @return string
     */
    public function getActor() {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * Actor (DVD movie) 0020010007
     *
     * @param string $actor
     * @return self
     */
    public function setActor($actor) {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Gets as language
     *
     * Languages supported (DVD movie) 0020010008
     *
     * @return string
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Languages supported (DVD movie) 0020010008
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as aspectRatio
     *
     * Movie aspect ratio, e.g. 16:9 (DVD movie) 0020010009
     *
     * @return string
     */
    public function getAspectRatio() {
        return $this->aspectRatio;
    }

    /**
     * Sets a new aspectRatio
     *
     * Movie aspect ratio, e.g. 16:9 (DVD movie) 0020010009
     *
     * @param string $aspectRatio
     * @return self
     */
    public function setAspectRatio($aspectRatio) {
        $this->aspectRatio = $aspectRatio;
        return $this;
    }

    /**
     * Gets as studio
     *
     * Studio information (DVD movie) 0020010010
     *
     * @return string
     */
    public function getStudio() {
        return $this->studio;
    }

    /**
     * Sets a new studio
     *
     * Studio information (DVD movie) 0020010010
     *
     * @param string $studio
     * @return self
     */
    public function setStudio($studio) {
        $this->studio = $studio;
        return $this;
    }

    /**
     * Gets as totalPlaytime
     *
     * Total playtime (DVD movie) 0020010011
     *
     * @return string
     */
    public function getTotalPlaytime() {
        return $this->totalPlaytime;
    }

    /**
     * Sets a new totalPlaytime
     *
     * Total playtime (DVD movie) 0020010011
     *
     * @param string $totalPlaytime
     * @return self
     */
    public function setTotalPlaytime($totalPlaytime) {
        $this->totalPlaytime = $totalPlaytime;
        return $this;
    }

    /**
     * Gets as features
     *
     * Features (DVD movie) 0020010012
     *
     * @return string
     */
    public function getFeatures() {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Features (DVD movie) 0020010012
     *
     * @param string $features
     * @return self
     */
    public function setFeatures($features) {
        $this->features = $features;
        return $this;
    }

    /**
     * Gets as soundFormat
     *
     * Sound format (DVD movie) 0020010013
     *
     * @return string
     */
    public function getSoundFormat() {
        return $this->soundFormat;
    }

    /**
     * Sets a new soundFormat
     *
     * Sound format (DVD movie) 0020010013
     *
     * @param string $soundFormat
     * @return self
     */
    public function setSoundFormat($soundFormat) {
        $this->soundFormat = $soundFormat;
        return $this;
    }

    /**
     * Gets as articleInfo
     *
     * General product information 00200100014
     *
     * @return string
     */
    public function getArticleInfo() {
        return $this->articleInfo;
    }

    /**
     * Sets a new articleInfo
     *
     * General product information 00200100014
     *
     * @param string $articleInfo
     * @return self
     */
    public function setArticleInfo($articleInfo) {
        $this->articleInfo = $articleInfo;
        return $this;
    }

    /**
     * Gets as subtitle
     *
     * Subtitle information 0020010015
     *
     * @return string
     */
    public function getSubtitle() {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * Subtitle information 0020010015
     *
     * @param string $subtitle
     * @return self
     */
    public function setSubtitle($subtitle) {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Gets as originalTitle
     *
     * Original title 0020010016
     *
     * @return string
     */
    public function getOriginalTitle() {
        return $this->originalTitle;
    }

    /**
     * Sets a new originalTitle
     *
     * Original title 0020010016
     *
     * @param string $originalTitle
     * @return self
     */
    public function setOriginalTitle($originalTitle) {
        $this->originalTitle = $originalTitle;
        return $this;
    }

    /**
     * Gets as languageCode
     *
     * ISO code 0020010017
     *
     * @return string
     */
    public function getLanguageCode() {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * ISO code 0020010017
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode) {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Gets as author
     *
     * Book author or screenwriter 0020010018
     *
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Book author or screenwriter 0020010018
     *
     * @param string $author
     * @return self
     */
    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as setTotal
     *
     * Product consists of n sets of physical media 0020011001
     *
     * @return integer
     */
    public function getSetTotal() {
        return $this->setTotal;
    }

    /**
     * Sets a new setTotal
     *
     * Product consists of n sets of physical media 0020011001
     *
     * @param integer $setTotal
     * @return self
     */
    public function setSetTotal($setTotal) {
        $this->setTotal = $setTotal;
        return $this;
    }

    /**
     * Gets as packingUnit
     *
     * Content of standard packaging unit in pieces 0020011002
     *
     * @return integer
     */
    public function getPackingUnit() {
        return $this->packingUnit;
    }

    /**
     * Sets a new packingUnit
     *
     * Content of standard packaging unit in pieces 0020011002
     *
     * @param integer $packingUnit
     * @return self
     */
    public function setPackingUnit($packingUnit) {
        $this->packingUnit = $packingUnit;
        return $this;
    }

    /**
     * Gets as movieDirector
     *
     * Movie director 0020016001
     *
     * @return string
     */
    public function getMovieDirector() {
        return $this->movieDirector;
    }

    /**
     * Sets a new movieDirector
     *
     * Movie director 0020016001
     *
     * @param string $movieDirector
     * @return self
     */
    public function setMovieDirector($movieDirector) {
        $this->movieDirector = $movieDirector;
        return $this;
    }

    /**
     * Gets as origin
     *
     * National / international N/I 0020018003
     *
     * @return string
     */
    public function getOrigin() {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * National / international N/I 0020018003
     *
     * @param string $origin
     * @return self
     */
    public function setOrigin($origin) {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as isCopyprotected
     *
     * J for copy protection, N for no copy protection 0020018005
     *
     * @return boolean
     */
    public function getIsCopyprotected() {
        return $this->isCopyprotected;
    }

    /**
     * Sets a new isCopyprotected
     *
     * J for copy protection, N for no copy protection 0020018005
     *
     * @param boolean $isCopyprotected
     * @return self
     */
    public function setIsCopyprotected($isCopyprotected) {
        $this->isCopyprotected = $isCopyprotected;
        return $this;
    }

    /**
     * Gets as textileInformation
     *
     * Information on textiles 0020021001
     *
     * @return string
     */
    public function getTextileInformation() {
        return $this->textileInformation;
    }

    /**
     * Sets a new textileInformation
     *
     * Information on textiles 0020021001
     *
     * @param string $textileInformation
     * @return self
     */
    public function setTextileInformation($textileInformation) {
        $this->textileInformation = $textileInformation;
        return $this;
    }

    /**
     * Gets as size
     *
     * Size information for textiles 0020022001
     *
     * @return string
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * Size information for textiles 0020022001
     *
     * @param string $size
     * @return self
     */
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as color
     *
     * Color information for textiles 0020023001
     *
     * @return string
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * Color information for textiles 0020023001
     *
     * @param string $color
     * @return self
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as labelName
     *
     * Label name 0020006004
     *
     * @return string
     */
    public function getLabelName() {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * Label name 0020006004
     *
     * @param string $labelName
     * @return self
     */
    public function setLabelName($labelName) {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Gets as labelShortName
     *
     * First 10 characters of GVL label name (recommended) 0020006002
     *
     * @return mixed
     */
    public function getLabelShortName() {
        return $this->labelShortName;
    }

    /**
     * Sets a new labelShortName
     *
     * First 10 characters of GVL label name (recommended) 0020006002
     *
     * @param mixed $labelShortName
     * @return self
     */
    public function setLabelShortName($labelShortName) {
        $this->labelShortName = $labelShortName;
        return $this;
    }

    /**
     * Gets as labelCode
     *
     * GVL Labelcode 0020006003
     *
     * @return string
     */
    public function getLabelCode() {
        return $this->labelCode;
    }

    /**
     * Sets a new labelCode
     *
     * GVL Labelcode 0020006003
     *
     * @param string $labelCode
     * @return self
     */
    public function setLabelCode($labelCode) {
        $this->labelCode = $labelCode;
        return $this;
    }

    /**
     * Gets as fSK
     *
     * Film ratings, german FSK (Freiwillige Selbstkontrolle) 0020017001
     *
     * @return mixed
     */
    public function getFSK() {
        return $this->fSK;
    }

    /**
     * Sets a new fSK
     *
     * Film ratings, german FSK (Freiwillige Selbstkontrolle) 0020017001
     *
     * @param mixed $fSK
     * @return self
     */
    public function setFSK($fSK) {
        $this->fSK = $fSK;
        return $this;
    }

    /**
     * Gets as recommendedAge
     *
     * Recommended age minimum 0020017002
     *
     * @return string
     */
    public function getRecommendedAge() {
        return $this->recommendedAge;
    }

    /**
     * Sets a new recommendedAge
     *
     * Recommended age minimum 0020017002
     *
     * @param string $recommendedAge
     * @return self
     */
    public function setRecommendedAge($recommendedAge) {
        $this->recommendedAge = $recommendedAge;
        return $this;
    }

    /**
     * Gets as pEGIRecommendedAge
     *
     * PEGI age recommendation 0020017051
     *
     * @return string
     */
    public function getPEGIRecommendedAge() {
        return $this->pEGIRecommendedAge;
    }

    /**
     * Sets a new pEGIRecommendedAge
     *
     * PEGI age recommendation 0020017051
     *
     * @param string $pEGIRecommendedAge
     * @return self
     */
    public function setPEGIRecommendedAge($pEGIRecommendedAge) {
        $this->pEGIRecommendedAge = $pEGIRecommendedAge;
        return $this;
    }

    /**
     * Gets as pEGI
     *
     * PEGI warning 0020017052 - 0020017059, values: violence, bad_language, fear,
     * drug_abuse, sex, discrimination, gambling, online
     *
     * @return string
     */
    public function getPEGI() {
        return $this->pEGI;
    }

    /**
     * Sets a new pEGI
     *
     * PEGI warning 0020017052 - 0020017059, values: violence, bad_language, fear,
     * drug_abuse, sex, discrimination, gambling, online
     *
     * @param string $pEGI
     * @return self
     */
    public function setPEGI($pEGI) {
        $this->pEGI = $pEGI;
        return $this;
    }

    /**
     * Gets as salesArea
     *
     * Subdistribution code 0020006001
     *
     * @return string
     */
    public function getSalesArea() {
        return $this->salesArea;
    }

    /**
     * Sets a new salesArea
     *
     * Subdistribution code 0020006001
     *
     * @param string $salesArea
     * @return self
     */
    public function setSalesArea($salesArea) {
        $this->salesArea = $salesArea;
        return $this;
    }

    /**
     * Gets as priceCode
     *
     * Current price code 0020012001
     *
     * @return string
     */
    public function getPriceCode() {
        return $this->priceCode;
    }

    /**
     * Sets a new priceCode
     *
     * Current price code 0020012001
     *
     * @param string $priceCode
     * @return self
     */
    public function setPriceCode($priceCode) {
        $this->priceCode = $priceCode;
        return $this;
    }

    /**
     * Gets as priceCodeNew
     *
     * Future price code 0020012005
     *
     * @return string
     */
    public function getPriceCodeNew() {
        return $this->priceCodeNew;
    }

    /**
     * Sets a new priceCodeNew
     *
     * Future price code 0020012005
     *
     * @param string $priceCodeNew
     * @return self
     */
    public function setPriceCodeNew($priceCodeNew) {
        $this->priceCodeNew = $priceCodeNew;
        return $this;
    }

    /**
     * Gets as priceCodeNewValidFrom
     *
     * Information about estimated activation date of new priccode 0020013003
     *
     * @return \DateTime
     */
    public function getPriceCodeNewValidFrom() {
        return $this->priceCodeNewValidFrom;
    }

    /**
     * Sets a new priceCodeNewValidFrom
     *
     * Information about estimated activation date of new priccode 0020013003
     *
     * @param \DateTime $priceCodeNewValidFrom
     * @return self
     */
    public function setPriceCodeNewValidFrom(\DateTime $priceCodeNewValidFrom) {
        $this->priceCodeNewValidFrom = $priceCodeNewValidFrom;
        return $this;
    }

    /**
     * Gets as wholesalePriceCHF
     *
     * Wholesale price CHF 0020012002
     *
     * @return string
     */
    public function getWholesalePriceCHF() {
        return $this->wholesalePriceCHF;
    }

    /**
     * Sets a new wholesalePriceCHF
     *
     * Wholesale price CHF 0020012002
     *
     * @param string $wholesalePriceCHF
     * @return self
     */
    public function setWholesalePriceCHF($wholesalePriceCHF) {
        $this->wholesalePriceCHF = $wholesalePriceCHF;
        return $this;
    }

    /**
     * Gets as charityDonationCHF
     *
     * Charity donation CHF included in price 0020012003
     *
     * @return float
     */
    public function getCharityDonationCHF() {
        return $this->charityDonationCHF;
    }

    /**
     * Sets a new charityDonationCHF
     *
     * Charity donation CHF included in price 0020012003
     *
     * @param float $charityDonationCHF
     * @return self
     */
    public function setCharityDonationCHF($charityDonationCHF) {
        $this->charityDonationCHF = $charityDonationCHF;
        return $this;
    }

    /**
     * Gets as recommendedRetailPriceCHF
     *
     * Recommended retail price CHF 0020012004
     *
     * @return mixed
     */
    public function getRecommendedRetailPriceCHF() {
        return $this->recommendedRetailPriceCHF;
    }

    /**
     * Sets a new recommendedRetailPriceCHF
     *
     * Recommended retail price CHF 0020012004
     *
     * @param mixed $recommendedRetailPriceCHF
     * @return self
     */
    public function setRecommendedRetailPriceCHF($recommendedRetailPriceCHF) {
        $this->recommendedRetailPriceCHF = $recommendedRetailPriceCHF;
        return $this;
    }

    /**
     * Gets as wholesalePriceCHFNew
     *
     * Future wholesale price CHF 0020012006
     *
     * @return string
     */
    public function getWholesalePriceCHFNew() {
        return $this->wholesalePriceCHFNew;
    }

    /**
     * Sets a new wholesalePriceCHFNew
     *
     * Future wholesale price CHF 0020012006
     *
     * @param string $wholesalePriceCHFNew
     * @return self
     */
    public function setWholesalePriceCHFNew($wholesalePriceCHFNew) {
        $this->wholesalePriceCHFNew = $wholesalePriceCHFNew;
        return $this;
    }

    /**
     * Gets as charityDonationCHFNew
     *
     * Future charity donation CHF included in price 0020012007
     *
     * @return float
     */
    public function getCharityDonationCHFNew() {
        return $this->charityDonationCHFNew;
    }

    /**
     * Sets a new charityDonationCHFNew
     *
     * Future charity donation CHF included in price 0020012007
     *
     * @param float $charityDonationCHFNew
     * @return self
     */
    public function setCharityDonationCHFNew($charityDonationCHFNew) {
        $this->charityDonationCHFNew = $charityDonationCHFNew;
        return $this;
    }

    /**
     * Gets as recommendedRetailPriceCHFNew
     *
     * Future recommended retail price CHF 0020012008
     *
     * @return mixed
     */
    public function getRecommendedRetailPriceCHFNew() {
        return $this->recommendedRetailPriceCHFNew;
    }

    /**
     * Sets a new recommendedRetailPriceCHFNew
     *
     * Future recommended retail price CHF 0020012008
     *
     * @param mixed $recommendedRetailPriceCHFNew
     * @return self
     */
    public function setRecommendedRetailPriceCHFNew($recommendedRetailPriceCHFNew) {
        $this->recommendedRetailPriceCHFNew = $recommendedRetailPriceCHFNew;
        return $this;
    }

    /**
     * Gets as wholesalePriceEUR
     *
     * Wholesale price EUR 0020012009
     *
     * @return string
     */
    public function getWholesalePriceEUR() {
        return $this->wholesalePriceEUR;
    }

    /**
     * Sets a new wholesalePriceEUR
     *
     * Wholesale price EUR 0020012009
     *
     * @param string $wholesalePriceEUR
     * @return self
     */
    public function setWholesalePriceEUR($wholesalePriceEUR) {
        $this->wholesalePriceEUR = $wholesalePriceEUR;
        return $this;
    }

    /**
     * Gets as charityDonationEUR
     *
     * Charity donation EUR included in price 0020012010
     *
     * @return float
     */
    public function getCharityDonationEUR() {
        return $this->charityDonationEUR;
    }

    /**
     * Sets a new charityDonationEUR
     *
     * Charity donation EUR included in price 0020012010
     *
     * @param float $charityDonationEUR
     * @return self
     */
    public function setCharityDonationEUR($charityDonationEUR) {
        $this->charityDonationEUR = $charityDonationEUR;
        return $this;
    }

    /**
     * Gets as recommendedRetailPriceEUR
     *
     * Recommended retail price EUR 0020012011
     *
     * @return mixed
     */
    public function getRecommendedRetailPriceEUR() {
        return $this->recommendedRetailPriceEUR;
    }

    /**
     * Sets a new recommendedRetailPriceEUR
     *
     * Recommended retail price EUR 0020012011
     *
     * @param mixed $recommendedRetailPriceEUR
     * @return self
     */
    public function setRecommendedRetailPriceEUR($recommendedRetailPriceEUR) {
        $this->recommendedRetailPriceEUR = $recommendedRetailPriceEUR;
        return $this;
    }

    /**
     * Gets as wholesalePriceEURNew
     *
     * Future wholesale price EUR 0020012012
     *
     * @return string
     */
    public function getWholesalePriceEURNew() {
        return $this->wholesalePriceEURNew;
    }

    /**
     * Sets a new wholesalePriceEURNew
     *
     * Future wholesale price EUR 0020012012
     *
     * @param string $wholesalePriceEURNew
     * @return self
     */
    public function setWholesalePriceEURNew($wholesalePriceEURNew) {
        $this->wholesalePriceEURNew = $wholesalePriceEURNew;
        return $this;
    }

    /**
     * Gets as charityDonationEURNew
     *
     * Future charity donation EUR included in price 0020012013
     *
     * @return float
     */
    public function getCharityDonationEURNew() {
        return $this->charityDonationEURNew;
    }

    /**
     * Sets a new charityDonationEURNew
     *
     * Future charity donation EUR included in price 0020012013
     *
     * @param float $charityDonationEURNew
     * @return self
     */
    public function setCharityDonationEURNew($charityDonationEURNew) {
        $this->charityDonationEURNew = $charityDonationEURNew;
        return $this;
    }

    /**
     * Gets as recommendedRetailPriceEURNew
     *
     * Future recommended retail price EUR 0020012014
     *
     * @return mixed
     */
    public function getRecommendedRetailPriceEURNew() {
        return $this->recommendedRetailPriceEURNew;
    }

    /**
     * Sets a new recommendedRetailPriceEURNew
     *
     * Future recommended retail price EUR 0020012014
     *
     * @param mixed $recommendedRetailPriceEURNew
     * @return self
     */
    public function setRecommendedRetailPriceEURNew($recommendedRetailPriceEURNew) {
        $this->recommendedRetailPriceEURNew = $recommendedRetailPriceEURNew;
        return $this;
    }

    /**
     * Gets as vATCode
     *
     * VAT code 0=no VAT, 1=reduced VAT, 2=full VAT 0020012051
     *
     * @return string
     */
    public function getVATCode() {
        return $this->vATCode;
    }

    /**
     * Sets a new vATCode
     *
     * VAT code 0=no VAT, 1=reduced VAT, 2=full VAT 0020012051
     *
     * @param string $vATCode
     * @return self
     */
    public function setVATCode($vATCode) {
        $this->vATCode = $vATCode;
        return $this;
    }

    /**
     * Gets as priceCategory
     *
     * Price categories: High, Medium, Budget 0020018004
     *
     * @return string
     */
    public function getPriceCategory() {
        return $this->priceCategory;
    }

    /**
     * Sets a new priceCategory
     *
     * Price categories: High, Medium, Budget 0020018004
     *
     * @param string $priceCategory
     * @return self
     */
    public function setPriceCategory($priceCategory) {
        $this->priceCategory = $priceCategory;
        return $this;
    }

    /**
     * Gets as available
     *
     * Product available J/N 0020018001
     *
     * @return string
     */
    public function getAvailable() {
        return $this->available;
    }

    /**
     * Sets a new available
     *
     * Product available J/N 0020018001
     *
     * @param string $available
     * @return self
     */
    public function setAvailable($available) {
        $this->available = $available;
        return $this;
    }

    /**
     * Gets as availability
     *
     * Product availablility 0-9 0020018001
     *
     * @return string
     */
    public function getAvailability() {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * Product availablility 0-9 0020018001
     *
     * @param string $availability
     * @return self
     */
    public function setAvailability($availability) {
        $this->availability = $availability;
        return $this;
    }

    /**
     * Gets as mediaPromotion
     *
     * Media advertising J/N 0020018002
     *
     * @return string
     */
    public function getMediaPromotion() {
        return $this->mediaPromotion;
    }

    /**
     * Sets a new mediaPromotion
     *
     * Media advertising J/N 0020018002
     *
     * @param string $mediaPromotion
     * @return self
     */
    public function setMediaPromotion($mediaPromotion) {
        $this->mediaPromotion = $mediaPromotion;
        return $this;
    }

    /**
     * Gets as netPrice
     *
     * Net price indicator J/N 0020018008
     *
     * @return string
     */
    public function getNetPrice() {
        return $this->netPrice;
    }

    /**
     * Sets a new netPrice
     *
     * Net price indicator J/N 0020018008
     *
     * @param string $netPrice
     * @return self
     */
    public function setNetPrice($netPrice) {
        $this->netPrice = $netPrice;
        return $this;
    }

    /**
     * Gets as priceFix
     *
     * Price fixed in accordance with german book price binding 0020018009
     *
     * @return string
     */
    public function getPriceFix() {
        return $this->priceFix;
    }

    /**
     * Sets a new priceFix
     *
     * Price fixed in accordance with german book price binding 0020018009
     *
     * @param string $priceFix
     * @return self
     */
    public function setPriceFix($priceFix) {
        $this->priceFix = $priceFix;
        return $this;
    }

    /**
     * Gets as marketingUnit
     *
     * Marketing unit for distribution 0020020001
     *
     * @return string
     */
    public function getMarketingUnit() {
        return $this->marketingUnit;
    }

    /**
     * Sets a new marketingUnit
     *
     * Marketing unit for distribution 0020020001
     *
     * @param string $marketingUnit
     * @return self
     */
    public function setMarketingUnit($marketingUnit) {
        $this->marketingUnit = $marketingUnit;
        return $this;
    }

    /**
     * Gets as campaignBlockedFrom
     *
     * Promotion campaign blocked from this date 0020018006
     *
     * @return \DateTime
     */
    public function getCampaignBlockedFrom() {
        return $this->campaignBlockedFrom;
    }

    /**
     * Sets a new campaignBlockedFrom
     *
     * Promotion campaign blocked from this date 0020018006
     *
     * @param \DateTime $campaignBlockedFrom
     * @return self
     */
    public function setCampaignBlockedFrom(\DateTime $campaignBlockedFrom) {
        $this->campaignBlockedFrom = $campaignBlockedFrom;
        return $this;
    }

    /**
     * Gets as campaignBlockedUntil
     *
     * Promotion campaign blocked until this date 0020018007
     *
     * @return \DateTime
     */
    public function getCampaignBlockedUntil() {
        return $this->campaignBlockedUntil;
    }

    /**
     * Sets a new campaignBlockedUntil
     *
     * Promotion campaign blocked until this date 0020018007
     *
     * @param \DateTime $campaignBlockedUntil
     * @return self
     */
    public function setCampaignBlockedUntil(\DateTime $campaignBlockedUntil) {
        $this->campaignBlockedUntil = $campaignBlockedUntil;
        return $this;
    }

    /**
     * Gets as physicalReleaseDate
     *
     * Date of release: first day of availability of physical product in stores
     * 0020013001
     *
     * @return mixed
     */
    public function getPhysicalReleaseDate() {
        return $this->physicalReleaseDate;
    }

    /**
     * Sets a new physicalReleaseDate
     *
     * Date of release: first day of availability of physical product in stores
     * 0020013001
     *
     * @param mixed $physicalReleaseDate
     * @return self
     */
    public function setPhysicalReleaseDate($physicalReleaseDate) {
        $this->physicalReleaseDate = $physicalReleaseDate;
        return $this;
    }

    /**
     * Gets as physicalCancellationDate
     *
     * Cancellation date of physical product 0020013002
     *
     * @return mixed
     */
    public function getPhysicalCancellationDate() {
        return $this->physicalCancellationDate;
    }

    /**
     * Sets a new physicalCancellationDate
     *
     * Cancellation date of physical product 0020013002
     *
     * @param mixed $physicalCancellationDate
     * @return self
     */
    public function setPhysicalCancellationDate($physicalCancellationDate) {
        $this->physicalCancellationDate = $physicalCancellationDate;
        return $this;
    }

    /**
     * Gets as changeMode
     *
     * Mode of article: 1=new, 2=changed, 3=canceled 0020008001
     *
     * @return string
     */
    public function getChangeMode() {
        return $this->changeMode;
    }

    /**
     * Sets a new changeMode
     *
     * Mode of article: 1=new, 2=changed, 3=canceled 0020008001
     *
     * @param string $changeMode
     * @return self
     */
    public function setChangeMode($changeMode) {
        $this->changeMode = $changeMode;
        return $this;
    }

    /**
     * Gets as frontline
     *
     * Frontline/catalog indicator F/K 0020020002
     *
     * @return string
     */
    public function getFrontline() {
        return $this->frontline;
    }

    /**
     * Sets a new frontline
     *
     * Frontline/catalog indicator F/K 0020020002
     *
     * @param string $frontline
     * @return self
     */
    public function setFrontline($frontline) {
        $this->frontline = $frontline;
        return $this;
    }

    /**
     * Gets as marketingText
     *
     * Marketing information 0020010051
     *
     * @return string
     */
    public function getMarketingText() {
        return $this->marketingText;
    }

    /**
     * Sets a new marketingText
     *
     * Marketing information 0020010051
     *
     * @param string $marketingText
     * @return self
     */
    public function setMarketingText($marketingText) {
        $this->marketingText = $marketingText;
        return $this;
    }

    /**
     * Gets as rackHeight
     *
     * Height of rack unit in mm 0020050001
     *
     * @return integer
     */
    public function getRackHeight() {
        return $this->rackHeight;
    }

    /**
     * Sets a new rackHeight
     *
     * Height of rack unit in mm 0020050001
     *
     * @param integer $rackHeight
     * @return self
     */
    public function setRackHeight($rackHeight) {
        $this->rackHeight = $rackHeight;
        return $this;
    }

    /**
     * Gets as rackDepth
     *
     * Depth of rack unit in mm 0020050002
     *
     * @return integer
     */
    public function getRackDepth() {
        return $this->rackDepth;
    }

    /**
     * Sets a new rackDepth
     *
     * Depth of rack unit in mm 0020050002
     *
     * @param integer $rackDepth
     * @return self
     */
    public function setRackDepth($rackDepth) {
        $this->rackDepth = $rackDepth;
        return $this;
    }

    /**
     * Gets as rackWidth
     *
     * Width of rack unit in mm 0020050003
     *
     * @return integer
     */
    public function getRackWidth() {
        return $this->rackWidth;
    }

    /**
     * Sets a new rackWidth
     *
     * Width of rack unit in mm 0020050003
     *
     * @param integer $rackWidth
     * @return self
     */
    public function setRackWidth($rackWidth) {
        $this->rackWidth = $rackWidth;
        return $this;
    }

    /**
     * Gets as grossWeight
     *
     * Gross weight of article in g 0020050004
     *
     * @return integer
     */
    public function getGrossWeight() {
        return $this->grossWeight;
    }

    /**
     * Sets a new grossWeight
     *
     * Gross weight of article in g 0020050004
     *
     * @param integer $grossWeight
     * @return self
     */
    public function setGrossWeight($grossWeight) {
        $this->grossWeight = $grossWeight;
        return $this;
    }

    /**
     * Gets as dualSystem
     *
     * Information to german dual system waste disposal 0020051001
     *
     * @return string
     */
    public function getDualSystem() {
        return $this->dualSystem;
    }

    /**
     * Sets a new dualSystem
     *
     * Information to german dual system waste disposal 0020051001
     *
     * @param string $dualSystem
     * @return self
     */
    public function setDualSystem($dualSystem) {
        $this->dualSystem = $dualSystem;
        return $this;
    }

    /**
     * Gets as lastReturnShipmentApplicationDate
     *
     * Last possible return application date 0020018010
     *
     * @return \DateTime
     */
    public function getLastReturnShipmentApplicationDate() {
        return $this->lastReturnShipmentApplicationDate;
    }

    /**
     * Sets a new lastReturnShipmentApplicationDate
     *
     * Last possible return application date 0020018010
     *
     * @param \DateTime $lastReturnShipmentApplicationDate
     * @return self
     */
    public function setLastReturnShipmentApplicationDate(\DateTime $lastReturnShipmentApplicationDate) {
        $this->lastReturnShipmentApplicationDate = $lastReturnShipmentApplicationDate;
        return $this;
    }

    /**
     * Gets as returnable
     *
     * J for returnable, N for not returnable 0020018011
     *
     * @return boolean
     */
    public function getReturnable() {
        return $this->returnable;
    }

    /**
     * Sets a new returnable
     *
     * J for returnable, N for not returnable 0020018011
     *
     * @param boolean $returnable
     * @return self
     */
    public function setReturnable($returnable) {
        $this->returnable = $returnable;
        return $this;
    }

    /**
     * Gets as genreCode
     *
     * 3 digit genre code 0020010004
     *
     * @return integer
     */
    public function getGenreCode() {
        return $this->genreCode;
    }

    /**
     * Sets a new genreCode
     *
     * 3 digit genre code 0020010004
     *
     * @param integer $genreCode
     * @return self
     */
    public function setGenreCode($genreCode) {
        $this->genreCode = $genreCode;
        return $this;
    }

    /**
     * Gets as genre
     *
     * Product genre
     *
     * @return mixed
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * Product genre
     *
     * @param mixed $genre
     * @return self
     */
    public function setGenre($genre) {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Gets as keywordCode1
     *
     * Genre keyword code 1 for product 0020015001
     *
     * @return mixed
     */
    public function getKeywordCode1() {
        return $this->keywordCode1;
    }

    /**
     * Sets a new keywordCode1
     *
     * Genre keyword code 1 for product 0020015001
     *
     * @param mixed $keywordCode1
     * @return self
     */
    public function setKeywordCode1($keywordCode1) {
        $this->keywordCode1 = $keywordCode1;
        return $this;
    }

    /**
     * Gets as keywordCode2
     *
     * Genre keyword code 2 for product product 0020015002
     *
     * @return mixed
     */
    public function getKeywordCode2() {
        return $this->keywordCode2;
    }

    /**
     * Sets a new keywordCode2
     *
     * Genre keyword code 2 for product product 0020015002
     *
     * @param mixed $keywordCode2
     * @return self
     */
    public function setKeywordCode2($keywordCode2) {
        $this->keywordCode2 = $keywordCode2;
        return $this;
    }

    /**
     * Gets as keywordCode3
     *
     * Genre keyword code 3 for product product 0020015003
     *
     * @return mixed
     */
    public function getKeywordCode3() {
        return $this->keywordCode3;
    }

    /**
     * Sets a new keywordCode3
     *
     * Genre keyword code 3 for product product 0020015003
     *
     * @param mixed $keywordCode3
     * @return self
     */
    public function setKeywordCode3($keywordCode3) {
        $this->keywordCode3 = $keywordCode3;
        return $this;
    }

    /**
     * Gets as keywordCode4
     *
     * Genre keyword code 4 for product product 0020015004
     *
     * @return mixed
     */
    public function getKeywordCode4() {
        return $this->keywordCode4;
    }

    /**
     * Sets a new keywordCode4
     *
     * Genre keyword code 4 for product product 0020015004
     *
     * @param mixed $keywordCode4
     * @return self
     */
    public function setKeywordCode4($keywordCode4) {
        $this->keywordCode4 = $keywordCode4;
        return $this;
    }

    /**
     * Gets as keywordCode5
     *
     * Genre keyword code 5 for product product 0020015005
     *
     * @return mixed
     */
    public function getKeywordCode5() {
        return $this->keywordCode5;
    }

    /**
     * Sets a new keywordCode5
     *
     * Genre keyword code 5 for product product 0020015005
     *
     * @param mixed $keywordCode5
     * @return self
     */
    public function setKeywordCode5($keywordCode5) {
        $this->keywordCode5 = $keywordCode5;
        return $this;
    }

    /**
     * Gets as keyword1
     *
     * Genre keyword 1 for product
     *
     * @return string
     */
    public function getKeyword1() {
        return $this->keyword1;
    }

    /**
     * Sets a new keyword1
     *
     * Genre keyword 1 for product
     *
     * @param string $keyword1
     * @return self
     */
    public function setKeyword1($keyword1) {
        $this->keyword1 = $keyword1;
        return $this;
    }

    /**
     * Gets as keyword2
     *
     * Genre keyword 2 for product
     *
     * @return string
     */
    public function getKeyword2() {
        return $this->keyword2;
    }

    /**
     * Sets a new keyword2
     *
     * Genre keyword 2 for product
     *
     * @param string $keyword2
     * @return self
     */
    public function setKeyword2($keyword2) {
        $this->keyword2 = $keyword2;
        return $this;
    }

    /**
     * Gets as keyword3
     *
     * Genre keyword 3 for product
     *
     * @return string
     */
    public function getKeyword3() {
        return $this->keyword3;
    }

    /**
     * Sets a new keyword3
     *
     * Genre keyword 3 for product
     *
     * @param string $keyword3
     * @return self
     */
    public function setKeyword3($keyword3) {
        $this->keyword3 = $keyword3;
        return $this;
    }

    /**
     * Gets as keyword4
     *
     * Genre keyword 4 for product
     *
     * @return string
     */
    public function getKeyword4() {
        return $this->keyword4;
    }

    /**
     * Sets a new keyword4
     *
     * Genre keyword 4 for product
     *
     * @param string $keyword4
     * @return self
     */
    public function setKeyword4($keyword4) {
        $this->keyword4 = $keyword4;
        return $this;
    }

    /**
     * Gets as keyword5
     *
     * Genre keyword 5 for product
     *
     * @return string
     */
    public function getKeyword5() {
        return $this->keyword5;
    }

    /**
     * Sets a new keyword5
     *
     * Genre keyword 5 for product
     *
     * @param string $keyword5
     * @return self
     */
    public function setKeyword5($keyword5) {
        $this->keyword5 = $keyword5;
        return $this;
    }

    /**
     * Gets as keywordTags
     *
     * Keyword tags for searching, etc. up to 120 characters 0020015006
     *
     * @return string
     */
    public function getKeywordTags() {
        return $this->keywordTags;
    }

    /**
     * Sets a new keywordTags
     *
     * Keyword tags for searching, etc. up to 120 characters 0020015006
     *
     * @param string $keywordTags
     * @return self
     */
    public function setKeywordTags($keywordTags) {
        $this->keywordTags = $keywordTags;
        return $this;
    }

    /**
     * Gets as tracks
     *
     * List of tracks
     *
     * @return \Ivdm\Phononet\Tracks
     */
    public function getTracks() {
        return $this->tracks;
    }

    /**
     * Sets a new tracks
     *
     * List of tracks
     *
     * @param \Ivdm\Phononet\Tracks $tracks
     * @return self
     */
    public function setTracks(\Ivdm\Phononet\Tracks $tracks) {
        $this->tracks = $tracks;
        return $this;
    }

    /**
     * Adds as artwork
     *
     * Artwork - cover, front or booklet
     *
     * @return self
     * @param \Ivdm\Phononet\TArtworkPictureType $artwork
     */
    public function addToArtwork(\Ivdm\Phononet\TArtworkPictureType $artwork) {
        $this->artwork[] = $artwork;
        return $this;
    }

    /**
     * isset artwork
     *
     * Artwork - cover, front or booklet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArtwork($index) {
        return isset($this->artwork[$index]);
    }

    /**
     * unset artwork
     *
     * Artwork - cover, front or booklet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArtwork($index) {
        unset($this->artwork[$index]);
    }

    /**
     * Gets as artwork
     *
     * Artwork - cover, front or booklet
     *
     * @return \Ivdm\Phononet\TArtworkPictureType[]
     */
    public function getArtwork() {
        return $this->artwork;
    }

    /**
     * Sets a new artwork
     *
     * Artwork - cover, front or booklet
     *
     * @param \Ivdm\Phononet\TArtworkPictureType[] $artwork
     * @return self
     */
    public function setArtwork(array $artwork) {
        $this->artwork = $artwork;
        return $this;
    }

    /**
     * Gets as dateOfChange
     *
     * 0020013004
     *
     * @return \DateTime
     */
    public function getDateOfChange() {
        return $this->dateOfChange;
    }

    /**
     * Sets a new dateOfChange
     *
     * 0020013004
     *
     * @param \DateTime $dateOfChange
     * @return self
     */
    public function setDateOfChange(\DateTime $dateOfChange) {
        $this->dateOfChange = $dateOfChange;
        return $this;
    }


}

