<?php

namespace Mattsmithdev;

abstract class SellableItem
{
    protected function addTaxToPrice(float $price, float $taxRate): float
    {
        return (1 + $taxRate) * $price;
    }
}