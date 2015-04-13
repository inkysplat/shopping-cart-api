<?php
/**
 * Created by PhpStorm.
 * User: adamnicholls
 * Date: 13/04/15
 * Time: 19:04
 */

namespace src\ShoppingCart\Models;

/**
 * Class Price
 * @package src\ShoppingCart\Models
 */
class Price
{
    /**
     * @var int
     */
    private $lower = 0;

    /**
     * @var int
     */
    private $upper = 0;

    /**
     * @var int
     */
    private $price = 0;

    /**
     * Will create a Price Element for a given Array formatted as [$lower, $upper, $price]
     *
     * @param int $lower
     * @param int $upper
     * @param int $price
     */
    public function __construct($lower = 0, $upper = 0, $price = 0)
    {
        $this->setLower($lower);
        $this->setUpper($upper);
        $this->setPrice($price);
    }

    /**
     * @param $lower
     */
    public function setLower($lower)
    {
        $this->lower = $lower;
        return $this;
    }

    /**
     * @param $upper
     */
    public function setUpper($upper)
    {
        $this->upper = $upper;
        return $this;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getLower()
    {
        return $this->lower;
    }

    /**
     * @return int
     */
    public function getUpper()
    {
        return $this->upper;
    }
} 