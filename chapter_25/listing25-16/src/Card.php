<?php

namespace Mattsmithdev;

class Card
{
    private Suit $suit;
    private int $number;

    public function getSuit(): Suit
    {
        return $this->suit;
    }

    public function setSuit(Suit $suit): void
    {
        $this->suit = $suit;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    public function __toString(): string 
    {
        return "CARD: the " . $this->number . " of " . $this->suit->name;
    }
}