<?php

class Dessert extends Food
{
    private int $calories;
    public function __construct(string $name, int $calories)
    {
        parent::__construct($name);
        $this->setCalories($calories);
    }

    public function setCalories(int $calories)
    {
        $this->calories = $calories;
    }

    public function __toString(): string
    {
        $message = parent::__toString();
        $message .= " I am a Dessert containing $this->calories calories!";
        return $message;
    }
}