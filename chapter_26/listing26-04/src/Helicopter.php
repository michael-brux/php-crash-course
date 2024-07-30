<?php

namespace Mattsmithdev;

class Helicopter extends Vehicle
{
    public function getSound(): string
    {
        return 'waca-waca-waca';
    }

}