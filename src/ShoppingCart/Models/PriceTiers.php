<?php

namespace src\ShoppingCart\Models;

use src\ShoppingCart\Exceptions\InvalidPriceTierException;

/**
 * Class PriceTiers
 * @package src\ShoppingCart\Models
 */
class PriceTiers
{
    /**
     * @var array
     */
    private $prices = [];

    /**
     * @param array $prices
     */
    public function __construct(Array $prices)
    {
        $this->validate($prices);
        foreach ($prices as $price) {
            $this->prices[] = $this->createPrice($price);
        }
    }

    /**
     * Creates a new Price Object
     *
     * @param Array $price
     * @return Price
     */
    private function createPrice($price)
    {
        if (count($price) <> 3) {
            throw new InvalidPriceTierException("Price Row Provided Isn't Valid.");
        }

        return new Price($price[0], $price[1], $price[2]);
    }

    /**
     * @param array $prices
     * @throws InvalidPriceTierException
     */
    private function validate($prices)
    {
        if (empty($prices)) {
            throw new InvalidPriceTierException("Empty Price Tiers Provided.");
        }

        foreach ($prices as $row => $price) {
            if (count($price) <> 3) {
                throw new InvalidPriceTierException("Price Row " . $row . " Provided Isn't Valid.");
            }
        }
    }

    /**
     * Will Calculate the appropriate Price for you based on Quantity Amount
     *
     * @param integer $quantity
     * @return float
     */
    public function getPrice($quantity)
    {
        foreach ($this->prices as $price) {
            if ($quantity >= $price->getLower() && $quantity <= $price->getUpper()) {
                return $price;
            }
        }

        return 0.00;
    }
} 