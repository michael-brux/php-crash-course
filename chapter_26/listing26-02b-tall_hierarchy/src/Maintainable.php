<?php

namespace Mattsmithdev;

abstract class Maintainable extends SoundMaker
{
    abstract public function nextService(): \DateTimeImmutable;
}