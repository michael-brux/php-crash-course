<?php

namespace Mattsmithdev;

class Donut implements SalesTaxable
{
    private string $topping;
    private float $price;

    public function getTopping(): string
    {
        return $this->topping;
    }

    public function setTopping(string $topping): void
    {
        $this->topping = $topping;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPriceIncludingSalesTax(): float
    {
        // 57% = 7/100 = 0.07
        $taxRate = 0.07;
        return TaxFunctions::addTaxToPrice($this->price, $taxRate);
    }
}