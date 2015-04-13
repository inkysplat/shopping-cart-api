<?php

/**
 * Class ProductsTest
 */
class ProductsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test a Tomato Product can be created
     */
    public function testTomatoCreation()
    {
        $tomato = new \src\ShoppingCart\Models\Products\Tomato();
        $this->assertEquals($tomato->getName(), 'Tomato');
    }

    /**
     * Test a Lemon Product can be created
     */
    public function testLemonCreation()
    {
        $tomato = new \src\ShoppingCart\Models\Products\Lemon();
        $this->assertEquals($tomato->getName(), 'Lemon');
    }

    /**
     * Test a Orange Product can be created
     */
    public function testOrangeCreation()
    {
        $tomato = new \src\ShoppingCart\Models\Products\Orange();
        $this->assertEquals($tomato->getName(), 'Orange');
    }
} 