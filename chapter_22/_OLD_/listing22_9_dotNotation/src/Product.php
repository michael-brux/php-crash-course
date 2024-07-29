<?php


namespace BeginningPHP;


class Product
{
    private $description;
    private $price;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function __toString()
    {
        return "(PRODUCT) description = $this->description / price = $this->price";
    }
}