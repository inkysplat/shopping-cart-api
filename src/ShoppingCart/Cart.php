<?php
/**
 * Created by PhpStorm.
 * User: adamnicholls
 * Date: 13/04/15
 * Time: 18:04
 */

namespace src\ShoppingCart;

use \src\ShoppingCart\Interfaces\CartInterface;
use \src\ShoppingCart\Models\Product;

/**
 * Class Cart
 * @package src\ShoppingCart
 */
class Cart implements CartInterface
{
    /**
     * Display a summary of the shopping cart
     * @return string
     */

    public function getTotalSum(){

    }

    /**
     * Add an item to the shopping cart
     *
     * @param Product $product Instance of the Product we're adding
     * @param int $amount The amount of $product
     *
     * @return void
     */

    public function addItem(Product $product, $amount){

    }

    /**
     * Get the price of the product depending on how many are
     *
     * already
     * in the shopping cart
     *
     * @param Product $product Product The product to determine
     *
     * price for
     *
     * @return float The price of $product
     */

    public function getPriceOf(Product $product){

    }
} 