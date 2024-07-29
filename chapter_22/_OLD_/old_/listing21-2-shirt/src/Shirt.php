<?php


namespace Mattsmithdev;


class Shirt
{
    private $type ="t-shirt";

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}