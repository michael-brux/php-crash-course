<?php

namespace Mattsmithdev;

class PipeOrgan implements SoundMaker
{
    public function getSound(): string
    {
        return 'dum, dum, dum-dum';
    }

    public function nextService(): \DateTime
    {
        return new \DateTimeImmutable('2030-01-01');
    }
}