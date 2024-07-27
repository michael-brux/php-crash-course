<?php

class Van extends Vehicle
{
    public bool $commercialTax;

    public function __toString(): string
    {
        return "(VAN) has $this->numDoors doors, runs on $this->fuel fuel, and commerial tax costs $ $this->commercialTax";
    }
}