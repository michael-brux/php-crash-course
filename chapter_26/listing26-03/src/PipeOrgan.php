<?php

namespace Mattsmithdev;

class PipeOrgan extends Maintainable
{
    public string $fuelType = 'diesel';
    public int $engineSizeCc = 2000;

    public function getSound(): string
    {
        return 'dum, dum, dum-dum';
    }


    public function nextService(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('2030-01-01');
    }
}