<?php
$oddNumbers = [1, 3, 5, 7, 9];
$evenNumbers = [2, 4, 6, 8];

$allNumbers = [...$oddNumbers, ...$evenNumbers];

print_r($allNumbers);

sort($allNumbers);

print_r($allNumbers);
