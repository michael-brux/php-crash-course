<?php
class Food
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return "(FOOD) $this->name";
    }
}