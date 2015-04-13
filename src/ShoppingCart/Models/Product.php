<?php

namespace src\ShoppingCart\Models;

use \src\ShoppingCart\Interfaces\ProductInterface;

/**
 * Class Product
 *
 * This acts like a Proxy for the Orange, Lemon, Tomato, etc.
 *
 * @package src\ShoppingCart\Models
 */
class Product implements ProductInterface
{
    /**
     * @var ProductInterface
     */
    private $product;

    /**
     * @param ProductInterface $product
     */
    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    /**
     * Will return the Product's name
     *
     * @return string
     */
    public function getName()
    {
        return $this->product->getName();
    }

    /**
     * Will return the Product's Price
     * @return double
     */
    public function getPrice()
    {
        return $this->product->getPrice();
    }

    /**
     * Will fool anything looking in-ward that we're a Product Entity
     * @return string
     */
    public function __toString()
    {
        return get_class($this);
    }

} 