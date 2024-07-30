<?php

namespace Mattsmithdev;

class PipeOrgan implements SoundMaker
{
    public function getSound(): string
    {
        return 'dum, dum, dum-dum';
    }
}