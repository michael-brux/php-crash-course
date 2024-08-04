<?php

namespace Mattsmithdev;
class Car
{
    private string $make = 'Ford';
    private string $model;
    private float $price;

    private static float $totalPrice;
    private static int $numInstances;

    public function __construct(string $make, string $model, float $price)
    {
        $this->make = $make;
        $this->model = $model;
        $this->price = $price;

        self::$totalPrice += $price;
        self::$numInstances++;
    }


}