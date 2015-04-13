<?php

namespace src\ShoppingCart\Models\Products;

use src\ShoppingCart\Interfaces\ProductInterface;

/**
 * Class Tomato
 * @package src\ShoppingCart\Models\Products
 */
class Tomato implements ProductInterface
{
    /**
     * Price Points Formatted as
     * [$lower, $upper, $price]
     * @return array|float
     */
    public function getPrice()
    {
        return [
            [100, -1, 0.14],
            [20, 99, 0.18],
            [0, 19, 0.20]
        ];
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return 'Tomato';
    }
} 