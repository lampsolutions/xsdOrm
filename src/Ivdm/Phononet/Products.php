<?php

namespace Ivdm\Phononet;

/**
 * Class representing Products
 */
class Products {

    /**
     * Product
     *
     * @property \Ivdm\Phononet\Products\ProductAType[] $product
     */
    private $product = null;

    /**
     * Adds as product
     *
     * Product
     *
     * @return self
     * @param \Ivdm\Phononet\Products\ProductAType $product
     */
    public function addToProduct(\Ivdm\Phononet\Products\ProductAType $product) {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * Product
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProduct($index) {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * Product
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProduct($index) {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * Product
     *
     * @return \Ivdm\Phononet\Products\ProductAType[]
     */
    public function getProduct() {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * Product
     *
     * @param \Ivdm\Phononet\Products\ProductAType[] $product
     * @return self
     */
    public function setProduct(array $product) {
        $this->product = $product;
        return $this;
    }


}

