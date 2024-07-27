<?php

class Dessert extends Food
{
    public function __toString(): string
    {
        $message = parent::__toString();
        $message .= " I am a Dessert!";
        return $message;
    }
}