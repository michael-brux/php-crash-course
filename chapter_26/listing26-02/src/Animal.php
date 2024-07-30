<?php

namespace Mattsmithdev;

abstract class Animal extends SoundMaker
{
    protected string $sound = "meow";
    public int $numLegs = 4;

    public function getSound(): string
    {
        return $this->sound;
    }
}