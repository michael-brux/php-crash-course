<?php

namespace Mattsmithdev;

class Product
{
    private string $description;
    private float $price;

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function __toString(): string {
        return "(PRODUCT) description = $this->description / price = $this->price";
    }
}
