<?php

namespace Mattsmithdev;

class Dessert extends Food
{
    private int $calories;

    public function __construct(string $name, int $calories)
    {
        parent::__construct($name);
        $this->setCalories($calories);
    }

    public function getCalories(): int
    {
        return $this->calories;
    }

    public function setCalories(int $calories)
    {
        if ($calories < 0) {
            throw new \InvalidArgumentException( 'attempting to set calories to a negative value');
        }

        if ($calories > 5000) {
            throw new \Exception('too many calories for one dessert!');
        }

        $this->calories = $calories;
    }

    public function __toString(): string
    {
        return "I am a Dessert containing $this->calories calories!";
    }

}