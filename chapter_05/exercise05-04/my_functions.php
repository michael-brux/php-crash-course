<?php

/*
    MM          MM
    MMMM      MMMM
    MM MMM  MMM MM
    MM   MMMM   MM
    MM          MM
    MM          MM
    MM          MM
*/

function capital_m(string $character = 'M', string $spacer = ' '): void
{
    print  str_repeat($character, 2) . str_repeat($spacer, 10) . str_repeat($character, 2);
    print PHP_EOL;

    print  str_repeat($character, 3) . str_repeat($spacer, 8) . str_repeat($character, 3);
    print PHP_EOL;

    print  str_repeat($character, 2) . $spacer
        . str_repeat($character, 3) . str_repeat($spacer, 2)
        . str_repeat($character, 3) . $spacer . str_repeat($character, 2);
    print PHP_EOL;

    print  str_repeat($character, 2) . str_repeat($spacer, 3)
        . str_repeat($character, 4) . str_repeat($spacer, 3)
        . str_repeat($character, 2);
    print PHP_EOL;

    print  str_repeat($character, 2) . str_repeat($spacer, 10) . str_repeat($character, 2);
    print PHP_EOL;

    print  str_repeat($character, 2) . str_repeat($spacer, 10) . str_repeat($character, 2);
    print PHP_EOL;

    print  str_repeat($character, 2) . str_repeat($spacer, 10) . str_repeat($character, 2);
    print PHP_EOL;

}