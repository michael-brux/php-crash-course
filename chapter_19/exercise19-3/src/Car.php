<?php

class Car extends Vehicle
{
    public int $numSeats;
    public float $roadTax;

    public function __toString(): string
    {
        return "(CAR) has $this->numDoors doors, runs on $this->fuel fuel, has $this->numSeats seats, and road tax costs $ $this->roadTax";
    }

}