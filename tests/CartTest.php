<?php

/**
 * Class CartTest
 */
class CartTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleTomatoesCalculation()
    {
        $product = \src\ShoppingCart\ProductFactory::create('Tomato');

        $cart = new \src\ShoppingCart\Cart();
        $cart->addItem($product, 10);
        $this->assertEquals($cart->getTotalSum(), 2.00);
        $this->assertEquals($cart->getPriceOf($product), 0.20);
    }

    public function testAdvancedTomatoesCalculation()
    {
        $product = \src\ShoppingCart\ProductFactory::create('Tomato');

        $cart = new \src\ShoppingCart\Cart();
        $cart->addItem($product, 25);
        $price = $cart->getTotalSum();
        var_dump($price);
        $this->assertEquals($price, 4.90);
    }

} 