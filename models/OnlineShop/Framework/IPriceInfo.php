<?php

/**
 * Interface for PriceInfo implementations of online shop framework
 */
interface OnlineShop_Framework_IPriceInfo {
    const MIN_PRICE = "min";

    /**
     * @abstract
     * @return OnlineShop_Framework_IPrice
     */
    public function getPrice();

    /**
     * @abstract
     * @return bool
     */
    public function isMinPrice();

    /**
     * @abstract
     * @return int
     */
    public function getQuantity();

    /**
     * @param int|string $quantity
     * numeric quantity or constant OnlineShop_Framework_IPriceInfo::MIN_PRICE
     */
    public function setQuantity($quantity);

    /**
     * @abstract
     * @param OnlineShop_Framework_IPriceSystem $priceSystem
     * @return void
     */
    public function setPriceSystem($priceSystem);


}