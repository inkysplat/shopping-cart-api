<?php
/**
 * Created by PhpStorm.
 * User: adamnicholls
 * Date: 13/04/15
 * Time: 18:04
 */

namespace src\ShoppingCart;

use \src\ShoppingCart\Interfaces\CartInterface;
use src\ShoppingCart\Models\PriceTiers;
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
     * Stores a list of Product PriceTiers
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
        foreach ($this->cart as $product => $quantity) {
            $quantity = $this->getProductQuantity($product);
            $prices = $this->getProductPrices($product)->getPrices();
            foreach($prices as $price) {
                if($quantity >= $price->getLower() && $quantity  <= $price->getUpper()) {
                    $q = $quantity;
                    if($q > $price->getUpper()){
                        $q = $price->getUpper();
                    }
                    $cost = +($q * $price->getPrice());

                }
            }
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
        //add the item to the cart with it's quantity.
        if (!isset($this->cart[$product->getName()])) {
            $this->cart[$product->getName()] = $amount;
        } else {
            $this->cart[$product->getName()] += $amount;
        }

        //if we don't have it lets create a new PriceTiers Object for this Product
        if (!isset($this->prices[$product->getName()])) {
            $this->prices[$product->getName()] = new PriceTiers($product->getPrice());
        }
    }

    /**
     * @param String $product
     * @return float
     */
    private function calculateCost($product)
    {
        $quantity = $this->getProductQuantity($product);
        return ($quantity * $this->getProductPrices($product)->getPrice($quantity));
    }

    /**
     * @param Product $product
     * @return string
     */
    private function getProductName(Product $product)
    {
        return $product->getName();
    }

    /**
     * @param Product $product
     * @return mixed
     */
    private function getProductPrices($product)
    {
        return $this->prices[$product];
    }

    /**
     * @param Product $product
     * @return mixed
     */
    private function getProductQuantity($product)
    {
        return $this->cart[$product];
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
        $product = $this->getProductName($product);
        $quantity = $this->getProductQuantity($product);
        return $this->getProductPrices($product)->getPrice($quantity)->getPrice();
    }

} 