<?php
/**
 * Created by PhpStorm.
 * User: adamnicholls
 * Date: 13/04/15
 * Time: 18:07
 */

namespace src\ShoppingCart;

use src\ShoppingCart\Exceptions\InvalidProductException;
use src\ShoppingCart\Models\Product;
use src\ShoppingCart\Models\Products\Lemon;
use src\ShoppingCart\Models\Products\Orange;
use src\ShoppingCart\Models\Products\Tomato;

/**
 * Class ProductFactory
 * @package src\ShoppingCart
 */
class ProductFactory
{
    /**
     * Will create a new Product by Proxy!
     *
     * @param Product $product
     * @throws InvalidProductException
     */
    public static function create($product)
    {
        switch(strtolower($product))
        {
            case "lemon":
                return new Product(new Lemon());
                break;

            case "orange":
                return new Product(new Orange());
                break;

            case "tomato":
                return new Product(new Tomato());
                break;

            default:
                throw new InvalidProductException("Unable to Create Product, Doesn't Exist.");
                break;
        }
    }
} 