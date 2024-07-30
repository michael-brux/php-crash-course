<?php

namespace Mattsmithdev;

abstract class Vehicle implements SoundMaker, Maintainable
{
    public bool $permittedOnRoads;
}