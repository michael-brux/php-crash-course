<?php

class SomeObject
{
    private int $age;
    private int $houseNumber;
    private string $color;
    private float $length;
    private bool $heavy;

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getHouseNumber(): int
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(int $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    /**
     * NOTE: starts with "is" because this is a Boolean variable ....
     */
    public function isHeavy(): bool
    {
        return $this->heavy;
    }

    public function setHeavy(bool $heavy): void
    {
        $this->heavy = $heavy;
    }
}