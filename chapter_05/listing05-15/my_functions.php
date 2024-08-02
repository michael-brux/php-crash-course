<?php
function string_to_int(string $numberString): ?int
{
    return match ($numberString) {
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        default => NULL
    };
}
