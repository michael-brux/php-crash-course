<?php

class Car extends Vehicle
{
    public string $bodyShape;

    public function getMakeModelShape(): string
    {
        return "$this->makeModel, $this->bodyShape";
    }
}