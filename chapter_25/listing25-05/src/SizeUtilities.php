<?php

namespace Mattsmithdev;

abstract class SizeUtilities
{
    const BITS_PER_BYTE = 8;
    const BYTES_PER_KILOBTYE = 1024;
    const BITS_PER_MEGABTYE = self::BITS_PER_BYTE * self::BYTES_PER_KILOBTYE * 1024;

    public static function bitsToMegaBytes(int $bits): float
    {
        return $bits / self::BITS_PER_MEGABTYE;
    }
}