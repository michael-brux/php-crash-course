<?php


class Jam extends Spread
{
    public int $sweetness;

    public function __construct(string $productNamne, float $weight)
    {
        $this->productName = $productNamne;
        $this->weight = $weight;
    }

    public function __toString(): string
    {
        return "JAM: $this->productName ({$this->weight}g) keeps for $this->shelfLifeMonths months: sweetness $this->sweetness";
    }

}