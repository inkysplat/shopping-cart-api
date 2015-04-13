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
     * @return array|float
     */
    public function getPrice()
    {
        return [
            [0, 19, 0.20],
            [20, 99, 0.18],
            [100, -1, 0.14]
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