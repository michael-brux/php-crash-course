<?php

namespace Mattsmithdev;

class Shirt
{
    private string $type ='t-shirt';

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}