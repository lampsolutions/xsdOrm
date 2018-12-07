<?php

namespace Ivdm\Phononet;

/**
 * Class representing Tracks
 */
class Tracks {

    /**
     * Total number of tracks for this product
     *
     * @property integer $numberOfTracks
     */
    private $numberOfTracks = null;

    /**
     * Total medium playtime
     *
     * @property string $playtime
     */
    private $playtime = null;

    /**
     * @property \Ivdm\Phononet\Track[] $track
     */
    private $track = null;

    /**
     * Gets as numberOfTracks
     *
     * Total number of tracks for this product
     *
     * @return integer
     */
    public function getNumberOfTracks() {
        return $this->numberOfTracks;
    }

    /**
     * Sets a new numberOfTracks
     *
     * Total number of tracks for this product
     *
     * @param integer $numberOfTracks
     * @return self
     */
    public function setNumberOfTracks($numberOfTracks) {
        $this->numberOfTracks = $numberOfTracks;
        return $this;
    }

    /**
     * Gets as playtime
     *
     * Total medium playtime
     *
     * @return string
     */
    public function getPlaytime() {
        return $this->playtime;
    }

    /**
     * Sets a new playtime
     *
     * Total medium playtime
     *
     * @param string $playtime
     * @return self
     */
    public function setPlaytime($playtime) {
        $this->playtime = $playtime;
        return $this;
    }

    /**
     * Adds as track
     *
     * @return self
     * @param \Ivdm\Phononet\Track $track
     */
    public function addToTrack(\Ivdm\Phononet\Track $track) {
        $this->track[] = $track;
        return $this;
    }

    /**
     * isset track
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTrack($index) {
        return isset($this->track[$index]);
    }

    /**
     * unset track
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTrack($index) {
        unset($this->track[$index]);
    }

    /**
     * Gets as track
     *
     * @return \Ivdm\Phononet\Track[]
     */
    public function getTrack() {
        return $this->track;
    }

    /**
     * Sets a new track
     *
     * @param \Ivdm\Phononet\Track[] $track
     * @return self
     */
    public function setTrack(array $track) {
        $this->track = $track;
        return $this;
    }


}

