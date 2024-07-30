<?php

namespace Mattsmithdev;

class Helicopter extends Vehicle
{
    public function getSound(): string
    {
        return 'waca-waca-waca';
    }

    public function nextService(): \DateTime
    {
        return new \DateTime('2022-06-22');
    }
}