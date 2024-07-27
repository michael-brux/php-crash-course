<?php


class Honey extends Spread
{
    public bool $isManuka = false;

    public function __construct(string $productNamne, float $weight)
    {
        $this->productName = $productNamne;
        $this->weight = $weight;
    }

    private function manukaString(): string
    {
        if($this->isManuka)
            return '(Manuka)';

        return '(NOT Manuka)';
    }

    public function __toString(): string
    {
        return "HONEY: $this->productName ({$this->weight}g) keeps for $this->shelfLifeMonths months {$this->manukaString()}";
    }

}