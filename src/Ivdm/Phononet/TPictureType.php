<?php

namespace Ivdm\Phononet;

/**
 * Class representing TPictureType
 *
 * Picture
 * XSD Type: t_picture
 */
class TPictureType {

    /**
     * Picture resolution, x-axis
     *
     * @property integer[] $resolutionX
     */
    private $resolutionX = null;

    /**
     * Picture resolution, y-axis
     *
     * @property integer[] $resolutionY
     */
    private $resolutionY = null;

    /**
     * Picture file format
     *
     * @property string[] $format
     */
    private $format = null;

    /**
     * Picture file location
     *
     * @property string[] $file
     */
    private $file = null;

    /**
     * cover md5 checksum
     *
     * @property string[] $md5Checksum
     */
    private $md5Checksum = null;

    /**
     * Link to cover server
     *
     * @property string[] $link
     */
    private $link = null;

    /**
     * @property string[] $pictureText
     */
    private $pictureText = null;

    /**
     * @property string[] $copyright
     */
    private $copyright = null;

    /**
     * Adds as resolutionX
     *
     * Picture resolution, x-axis
     *
     * @return self
     * @param integer $resolutionX
     */
    public function addToResolutionX($resolutionX) {
        $this->resolutionX[] = $resolutionX;
        return $this;
    }

    /**
     * isset resolutionX
     *
     * Picture resolution, x-axis
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResolutionX($index) {
        return isset($this->resolutionX[$index]);
    }

    /**
     * unset resolutionX
     *
     * Picture resolution, x-axis
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResolutionX($index) {
        unset($this->resolutionX[$index]);
    }

    /**
     * Gets as resolutionX
     *
     * Picture resolution, x-axis
     *
     * @return integer[]
     */
    public function getResolutionX() {
        return $this->resolutionX;
    }

    /**
     * Sets a new resolutionX
     *
     * Picture resolution, x-axis
     *
     * @param integer $resolutionX
     * @return self
     */
    public function setResolutionX(array $resolutionX) {
        $this->resolutionX = $resolutionX;
        return $this;
    }

    /**
     * Adds as resolutionY
     *
     * Picture resolution, y-axis
     *
     * @return self
     * @param integer $resolutionY
     */
    public function addToResolutionY($resolutionY) {
        $this->resolutionY[] = $resolutionY;
        return $this;
    }

    /**
     * isset resolutionY
     *
     * Picture resolution, y-axis
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResolutionY($index) {
        return isset($this->resolutionY[$index]);
    }

    /**
     * unset resolutionY
     *
     * Picture resolution, y-axis
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResolutionY($index) {
        unset($this->resolutionY[$index]);
    }

    /**
     * Gets as resolutionY
     *
     * Picture resolution, y-axis
     *
     * @return integer[]
     */
    public function getResolutionY() {
        return $this->resolutionY;
    }

    /**
     * Sets a new resolutionY
     *
     * Picture resolution, y-axis
     *
     * @param integer $resolutionY
     * @return self
     */
    public function setResolutionY(array $resolutionY) {
        $this->resolutionY = $resolutionY;
        return $this;
    }

    /**
     * Adds as format
     *
     * Picture file format
     *
     * @return self
     * @param string $format
     */
    public function addToFormat($format) {
        $this->format[] = $format;
        return $this;
    }

    /**
     * isset format
     *
     * Picture file format
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormat($index) {
        return isset($this->format[$index]);
    }

    /**
     * unset format
     *
     * Picture file format
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormat($index) {
        unset($this->format[$index]);
    }

    /**
     * Gets as format
     *
     * Picture file format
     *
     * @return string[]
     */
    public function getFormat() {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * Picture file format
     *
     * @param string $format
     * @return self
     */
    public function setFormat(array $format) {
        $this->format = $format;
        return $this;
    }

    /**
     * Adds as file
     *
     * Picture file location
     *
     * @return self
     * @param string $file
     */
    public function addToFile($file) {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * Picture file location
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFile($index) {
        return isset($this->file[$index]);
    }

    /**
     * unset file
     *
     * Picture file location
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFile($index) {
        unset($this->file[$index]);
    }

    /**
     * Gets as file
     *
     * Picture file location
     *
     * @return string[]
     */
    public function getFile() {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * Picture file location
     *
     * @param string $file
     * @return self
     */
    public function setFile(array $file) {
        $this->file = $file;
        return $this;
    }

    /**
     * Adds as md5Checksum
     *
     * cover md5 checksum
     *
     * @return self
     * @param string $md5Checksum
     */
    public function addToMd5Checksum($md5Checksum) {
        $this->md5Checksum[] = $md5Checksum;
        return $this;
    }

    /**
     * isset md5Checksum
     *
     * cover md5 checksum
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMd5Checksum($index) {
        return isset($this->md5Checksum[$index]);
    }

    /**
     * unset md5Checksum
     *
     * cover md5 checksum
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMd5Checksum($index) {
        unset($this->md5Checksum[$index]);
    }

    /**
     * Gets as md5Checksum
     *
     * cover md5 checksum
     *
     * @return string[]
     */
    public function getMd5Checksum() {
        return $this->md5Checksum;
    }

    /**
     * Sets a new md5Checksum
     *
     * cover md5 checksum
     *
     * @param string $md5Checksum
     * @return self
     */
    public function setMd5Checksum(array $md5Checksum) {
        $this->md5Checksum = $md5Checksum;
        return $this;
    }

    /**
     * Adds as link
     *
     * Link to cover server
     *
     * @return self
     * @param string $link
     */
    public function addToLink($link) {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * Link to cover server
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLink($index) {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * Link to cover server
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLink($index) {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * Link to cover server
     *
     * @return string[]
     */
    public function getLink() {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Link to cover server
     *
     * @param string $link
     * @return self
     */
    public function setLink(array $link) {
        $this->link = $link;
        return $this;
    }

    /**
     * Adds as pictureText
     *
     * @return self
     * @param string $pictureText
     */
    public function addToPictureText($pictureText) {
        $this->pictureText[] = $pictureText;
        return $this;
    }

    /**
     * isset pictureText
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPictureText($index) {
        return isset($this->pictureText[$index]);
    }

    /**
     * unset pictureText
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPictureText($index) {
        unset($this->pictureText[$index]);
    }

    /**
     * Gets as pictureText
     *
     * @return string[]
     */
    public function getPictureText() {
        return $this->pictureText;
    }

    /**
     * Sets a new pictureText
     *
     * @param string $pictureText
     * @return self
     */
    public function setPictureText(array $pictureText) {
        $this->pictureText = $pictureText;
        return $this;
    }

    /**
     * Adds as copyright
     *
     * @return self
     * @param string $copyright
     */
    public function addToCopyright($copyright) {
        $this->copyright[] = $copyright;
        return $this;
    }

    /**
     * isset copyright
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCopyright($index) {
        return isset($this->copyright[$index]);
    }

    /**
     * unset copyright
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCopyright($index) {
        unset($this->copyright[$index]);
    }

    /**
     * Gets as copyright
     *
     * @return string[]
     */
    public function getCopyright() {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * @param string $copyright
     * @return self
     */
    public function setCopyright(array $copyright) {
        $this->copyright = $copyright;
        return $this;
    }


}

