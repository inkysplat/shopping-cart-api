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
        $this->assertTrue($product instanceof \src\ShoppingCart\Models\Product);
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
        $this->assertTrue($product instanceof \src\ShoppingCart\Models\Product);
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
        $this->assertTrue($product instanceof \src\ShoppingCart\Models\Product);
    }

    /**
     * Check Invalid Products aren't created
     *
     * @expectException InvalidProductException
     */
    public function testInvalidProductCreation()
    {
        try {
            $product = \src\ShoppingCart\ProductFactory::create("FooBar");
        }catch(\src\ShoppingCart\Exceptions\InvalidProductException $e)
        {
            $this->assertEquals($e->getMessage(),"Unable to Create Product, Doesn't Exist.");
        }
    }
}
