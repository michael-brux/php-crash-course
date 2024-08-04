<?php

namespace Mattsmithdev;

class Book implements SalesTaxable
{
    private string $title;
    private float $price;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
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
        // 5% = 5/100 = 0.05
        $taxRate = 0.05;
        return TaxFunctions::addTaxToPrice($this->price, $taxRate);
    }
}