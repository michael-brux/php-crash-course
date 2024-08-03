<?php
function which_is_larger(int|float $n1, int|float $n2): int|float|NULL
{
    if($n1 > $n2) {
        return $n1;
    }

    if($n2 > $n1) {
        return $n2;
    }

    // if get here, then both numbers are the same
    // so return NULL
    return NULL;
}