<?php

namespace src\ShoppingCart\Models;

use \src\ShoppingCart\Interfaces;

/**
 * Class Product
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

    public function getName()
    {
        return $this->product->getName();
    }

    public function getPrice()
    {
        return $this->product->getPrice();
    }


} 