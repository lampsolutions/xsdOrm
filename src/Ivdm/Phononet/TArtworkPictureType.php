<?php

namespace Ivdm\Phononet;

/**
 * Class representing TArtworkPictureType
 *
 * Artwork picture - extends type 'picture' by element 'title'
 * XSD Type: t_artwork_picture
 */
class TArtworkPictureType extends TPictureType {

    /**
     * Artwork type - 'cover', 'front' or 'booklet'
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Artwork page number - from 1 to 99
     *
     * @property integer $page
     */
    private $page = null;

    /**
     * Gets as type
     *
     * Artwork type - 'cover', 'front' or 'booklet'
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Artwork type - 'cover', 'front' or 'booklet'
     *
     * @param string $type
     * @return self
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as page
     *
     * Artwork page number - from 1 to 99
     *
     * @return integer
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * Sets a new page
     *
     * Artwork page number - from 1 to 99
     *
     * @param integer $page
     * @return self
     */
    public function setPage($page) {
        $this->page = $page;
        return $this;
    }


}

