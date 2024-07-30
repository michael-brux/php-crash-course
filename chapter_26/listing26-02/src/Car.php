<?php

namespace Mattsmithdev;

use Cassandra\Date;

class Car extends SoundMaker
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

}