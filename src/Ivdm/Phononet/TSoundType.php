<?php

namespace Ivdm\Phononet;

/**
 * Class representing TSoundType
 *
 * Sound information
 * XSD Type: t_sound
 */
class TSoundType {

    /**
     * Picture resolution, x-axis
     *
     * @property string $file
     */
    private $file = null;

    /**
     * Sound type, here always prelistening
     *
     * @property string $soundType
     */
    private $soundType = null;

    /**
     * Soundfile format
     *
     * @property string $codec
     */
    private $codec = null;

    /**
     * Soundfile bitrate in kbps
     *
     * @property integer $bitrate
     */
    private $bitrate = null;

    /**
     * Soundfile channel information
     *
     * @property string $channels
     */
    private $channels = null;

    /**
     * Soundfile sampling rate in Hz
     *
     * @property integer $samplingRate
     */
    private $samplingRate = null;

    /**
     * @property string $playtime
     */
    private $playtime = null;

    /**
     * Gets as file
     *
     * Picture resolution, x-axis
     *
     * @return string
     */
    public function getFile() {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * Picture resolution, x-axis
     *
     * @param string $file
     * @return self
     */
    public function setFile($file) {
        $this->file = $file;
        return $this;
    }

    /**
     * Gets as soundType
     *
     * Sound type, here always prelistening
     *
     * @return string
     */
    public function getSoundType() {
        return $this->soundType;
    }

    /**
     * Sets a new soundType
     *
     * Sound type, here always prelistening
     *
     * @param string $soundType
     * @return self
     */
    public function setSoundType($soundType) {
        $this->soundType = $soundType;
        return $this;
    }

    /**
     * Gets as codec
     *
     * Soundfile format
     *
     * @return string
     */
    public function getCodec() {
        return $this->codec;
    }

    /**
     * Sets a new codec
     *
     * Soundfile format
     *
     * @param string $codec
     * @return self
     */
    public function setCodec($codec) {
        $this->codec = $codec;
        return $this;
    }

    /**
     * Gets as bitrate
     *
     * Soundfile bitrate in kbps
     *
     * @return integer
     */
    public function getBitrate() {
        return $this->bitrate;
    }

    /**
     * Sets a new bitrate
     *
     * Soundfile bitrate in kbps
     *
     * @param integer $bitrate
     * @return self
     */
    public function setBitrate($bitrate) {
        $this->bitrate = $bitrate;
        return $this;
    }

    /**
     * Gets as channels
     *
     * Soundfile channel information
     *
     * @return string
     */
    public function getChannels() {
        return $this->channels;
    }

    /**
     * Sets a new channels
     *
     * Soundfile channel information
     *
     * @param string $channels
     * @return self
     */
    public function setChannels($channels) {
        $this->channels = $channels;
        return $this;
    }

    /**
     * Gets as samplingRate
     *
     * Soundfile sampling rate in Hz
     *
     * @return integer
     */
    public function getSamplingRate() {
        return $this->samplingRate;
    }

    /**
     * Sets a new samplingRate
     *
     * Soundfile sampling rate in Hz
     *
     * @param integer $samplingRate
     * @return self
     */
    public function setSamplingRate($samplingRate) {
        $this->samplingRate = $samplingRate;
        return $this;
    }

    /**
     * Gets as playtime
     *
     * @return string
     */
    public function getPlaytime() {
        return $this->playtime;
    }

    /**
     * Sets a new playtime
     *
     * @param string $playtime
     * @return self
     */
    public function setPlaytime($playtime) {
        $this->playtime = $playtime;
        return $this;
    }


}

