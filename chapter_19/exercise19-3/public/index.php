<?php
require_once __DIR__ . '/../src/Vehicle.php';
require_once __DIR__ . '/../src/Car.php';
require_once __DIR__ . '/../src/Van.php';

$car1 = new Car();
$car1->numDoors = 3;
$car1->fuel = 'petroleum';
$car1->numSeats = 5;
$car1->roadTax = 210;

print $car1;

$van1 = new Van();
$van1->numDoors = 5;
$van1->fuel = 'diesel';
$van1->commercialTax = 75;

print PHP_EOL . $van1;