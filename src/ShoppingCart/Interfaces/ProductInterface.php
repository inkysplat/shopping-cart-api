<?php

namespace src\ShoppingCart\Interfaces;

/**
 * Interface ProductInterface
 * @package src\ShoppingCart\Interfaces
 */
interface ProductInterface
{
    /**
     * Returns the Price of a Product
     *
     * @return double
     */
    public function getPrice();

    /**
     * Returns the Name of a Product
     *
     * @return string
     */
    public function getName();
}