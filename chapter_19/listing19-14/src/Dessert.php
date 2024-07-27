<?php

class Dessert extends Food
{
    public function __toString(): string
    {
        $message = "I am a Dessert named $this->name";
        return $message;
    }
}