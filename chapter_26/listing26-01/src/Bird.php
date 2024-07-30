<?php

namespace Mattsmithdev;

class Bird extends Animal
{
    public int $numLegs = 2;

    private function getPopularSooundFromWebApi(): string
    {
        return 'cherp cherp';
    }

    public function getSound(): string
    {
        return $this->getPopularSooundFromWebApi();
    }

}