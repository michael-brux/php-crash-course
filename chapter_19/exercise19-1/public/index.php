<?php
require_once __DIR__ . '/../src/Jam.php';

$food1 = new Jam('Raspberry Conserve', 45.5);
$food1->sweetness = 5;
$food1->shelfLifeMonths = 24;

print $food1;
