<?php

namespace Mattsmithdev;

class Car extends Maintainable
{
    public string $fuelType = 'diesel';
    public int $engineSizeCc = 2000;

    public function getSound(): string
    {
        switch ($this->fuelType){
            case 'diesel':
                return 'vroom-vroom';
            default:
                return 'putt-putt-putt';
        }
    }


    public function nextService(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('2022-06-22');

    }
}