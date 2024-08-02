<?php
function print_stars(int $numStars, string $spacer): void
{
    $lineLength = 20;
    $starsString = str_repeat('*', $numStars);
    $centeredStars = str_pad($starsString, $lineLength, $spacer, STR_PAD_BOTH);
    print $centeredStars . "\n";
}
