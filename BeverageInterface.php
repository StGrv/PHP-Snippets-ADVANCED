<?php

namespace app\modules\bookshop\interfaces;

interface BeverageInterface
{
    public function getName(): string;

    public function getPrice() : float;
}