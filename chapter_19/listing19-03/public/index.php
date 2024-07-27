<?php
require_once __DIR__ . '/../src/Vehicle.php';
require_once __DIR__ . '/../src/Car.php';

$car1 = new Car();

$car1->bodyShape = 'Sedan';
$car1->makeModel = 'Ford Mustang';
$car1->numPassengers = 5;
$car1->topSpeed = 150;

var_dump($car1);