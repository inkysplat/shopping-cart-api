<?php

namespace src\ShoppingCart\Models\Products;

use src\ShoppingCart\Interfaces\ProductInterface;

/**
 * Class Lemon
 * @package src\ShoppingCart\Models\Products
 */
class Lemon implements ProductInterface
{
    /**
     * @return array|float
     */
    public function getPrice()
    {
        return [
            [0, 10, 0.50],
            [11, -1, 0.45]
        ];
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return 'Lemon';
    }

} 