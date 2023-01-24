<?php

use app\modules\bookshop\interfaces\BeverageInterface;

class Vodka implements BeverageInterface
{
    const BEV_NAME = "Vodka";
    const BEV_PRICE = 12.50;

    public function getName(): string
    {
        return self::BEV_NAME;
    }

    public function getPrice(): float
    {
        return self::BEV_PRICE;
    }
}