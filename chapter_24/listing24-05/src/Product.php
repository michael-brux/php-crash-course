<?php

namespace Mattsmithdev;

class Product
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)
    {
        if($price<0){
            throw new \Exception('attempting to set price to a negative value');
        }

        $this->price = $price;
        $this->name = $name;
    }
}