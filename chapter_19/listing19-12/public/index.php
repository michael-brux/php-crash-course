<?php
require_once __DIR__ . '/../src/Vehicle.php';
require_once __DIR__ . '/../src/Car.php';

$vehicle1 = new Vehicle();

$car1 = new Car();

$car1->bodyShape = 'Sedan';
$car1->makeModel = 'Ford Mustang';

$car1->setMakeModel('Ford Mustang');
$car1->setNumPassengers(5);
$car1->setTopSpeed(150);

print $car1->getMakeModelShape();