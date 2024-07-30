<?php

namespace Mattsmithdev;

trait TaxFunctions
{
    public function addTaxToPrice(float $price, float $taxRate): float
    {
        return (1 + $taxRate) * $price;
    }
}