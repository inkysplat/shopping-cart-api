<?php

namespace src\ShoppingCart\Models\Products;

use src\ShoppingCart\Interfaces\ProductInterface;

/**
 * Class Orange
 * @package src\ShoppingCart\Models\Products
 */
class Orange implements ProductInterface
{

    /**
     * @return array|float
     */
    public function getPrice()
    {
        return [
            [0, 20, 0.20],
            [21, 80, 0.18],
            [100, -1, 0.12]
        ];
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return 'Orange';
    }
} 