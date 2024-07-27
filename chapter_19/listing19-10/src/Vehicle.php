<?php
class Vehicle
{
    protected string $makeModel;
    private int $numPassengers;
    private float $topSpeed;

    public function getMakeModel(): string
    {
        return $this->makeModel;
    }

    public function setMakeModel(string $makeModel): void
    {
        $this->makeModel = $makeModel;
    }

    public function getNumPassengers(): int
    {
        return $this->numPassengers;
    }

    public function setNumPassengers(int $numPassengers): void
    {
        $this->numPassengers = $numPassengers;
    }

    public function getTopSpeed(): float
    {
        return $this->topSpeed;
    }

    public function setTopSpeed(float $topSpeed): void
    {
        $this->topSpeed = $topSpeed;
    }
}