<?php
require_once __DIR__ . '/../src/Spread.php';
require_once __DIR__ . '/../src/Jam.php';
require_once __DIR__ . '/../src/Honey.php';

$jam1 = new Jam('Raspberry Conserve', 45.5);
$jam1->sweetness = 5;
$jam1->shelfLifeMonths = 24;

$honey1 = new Honey('Clear Honey', 90.5);

print $jam1;
print PHP_EOL;

print $honey1;
print PHP_EOL;
