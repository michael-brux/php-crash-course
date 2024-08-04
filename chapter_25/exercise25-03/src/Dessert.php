<?php

namespace Mattsmithdev;

class Dessert
{
    private string $name;
    private DietType $diet;

    public function __toString(): string
    {
        return "(DESSERT) $this->name ({$this->diet->name} dish)";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDiet(): DietType
    {
        return $this->diet;
    }

    public function setDiet(DietType $diet): void
    {
        $this->diet = $diet;
    }



}