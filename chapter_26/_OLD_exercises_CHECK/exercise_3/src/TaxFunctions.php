<?php

namespace Mattsmithdev;

class TaxFunctions
{
    public static function addTaxToPrice(float $price, float $taxRate): float
    {
        return (1 + $taxRate) * $price;
    }

}