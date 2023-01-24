<?php

class VodkaPriceDecorator
{
    private $vodka;

    CONST PRICE_INCREASE = 2.50;

    public function __construct() {
        $this->vodka = new Vodka();
    }

    public function getPrice(): float
    {
        return $this->vodka->getPrice() + self::PRICE_INCREASE;
    }
}