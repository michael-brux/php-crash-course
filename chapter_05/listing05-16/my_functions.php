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

function int_to_message(?int $number): string
{
    if (is_null($number)) {
        return "sorry, could not convert string to an integer\n";
    } else {
        return "an integer = $number\n";
    }
}
