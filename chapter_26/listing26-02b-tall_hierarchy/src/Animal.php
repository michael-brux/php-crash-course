<?php

namespace Mattsmithdev;

abstract class Animal extends SoundMaker
{
    protected string $sound = 'roar';
    public int $numLegs = 2;

    public function getSound(): string
    {
        return $this->sound;
    }
}