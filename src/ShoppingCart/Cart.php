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
     * Stores an Array of Products
     * @var array
     */
    private $cart = [];

    /**
     * Stores a list of Product Prices
     * @var array
     */
    private $prices = [];

    /**
     * Display a summary of the shopping cart
     * @return string
     */

    public function getTotalSum()
    {
        $cost = 0.00;
        foreach($this->cart as $product => $quantity)
        {
            $cost += $this->calculateCost($product);
        }
        return $cost;
    }

    /**
     * Add an item to the shopping cart
     *
     * @param Product $product Instance of the Product we're adding
     * @param int $amount The amount of $product
     *
     * @return void
     */

    public function addItem(Product $product, $amount)
    {
        if (!isset($this->cart[$product->getName()])) {
            $this->cart[$product->getName()] = $amount;
        } else {
            $this->cart[$product->getName()] += $amount;
        }

        if (!isset($this->prices[$product->getName()])) {
            $this->prices[$product->getName()] = $product->getPrice();
        }
    }

    private function calculateCost(String $product)
    {
        if(!isset($this->cart[$product]) || !isset($this->prices[$product])){
            return 0;
        }

        $amount = $this->cart[$product];
        $prices = $this->prices[$product];

        $cost = 0.00;

        foreach($prices as $price){
            $lower = $prices[0];
            $higher = $prices[1];

            if($amount < $higher){
                $cost += ($amount * $prices[2]);
            }
        }

        return $cost;
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

    public function getPriceOf(Product $product)
    {
        return $this->calculateCost($product->getName());
    }
} 