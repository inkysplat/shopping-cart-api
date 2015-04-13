<?php

/**
 * Class ProductFactoryTest
 */
class ProductFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test a Tomato Product being created
     *
     * @throws \src\ShoppingCart\Exceptions\InvalidProductException
     */
    public function testTomatoProductCreation()
    {
        $product = \src\ShoppingCart\ProductFactory::create('Tomato');
        $this->assertEquals($product->getName(), 'Tomato');
    }

    /**
     * Test a Lemon Product being created
     *
     * @throws \src\ShoppingCart\Exceptions\InvalidProductException
     */
    public function testLemonProductCreation()
    {
        $product = \src\ShoppingCart\ProductFactory::create('Lemon');
        $this->assertEquals($product->getName(), 'Lemon');
    }

    /**
     * Test a Orange Product being created
     *
     * @throws \src\ShoppingCart\Exceptions\InvalidProductException
     */
    public function testOrangeProductCreation()
    {
        $product = \src\ShoppingCart\ProductFactory::create('Orange');
        $this->assertEquals($product->getName(), 'Orange');
    }
} 