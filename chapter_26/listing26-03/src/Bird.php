<?php

namespace Mattsmithdev;

class Bird extends Animal
{
    private function getPopularSooundFromWebApi(): string
    {
        return 'cherp cherp';
    }

    public function getSound(): string
    {
        return $this->getPopularSooundFromWebApi();
    }

}