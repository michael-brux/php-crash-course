<?php

namespace Mattsmithdev;

class Product
{
    private string $name;
    private float $price;

    public function __construct(string $name, int $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

}