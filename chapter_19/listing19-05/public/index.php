<?php
require_once __DIR__ . '/../src/Vehicle.php';
require_once __DIR__ . '/../src/Boat.php';

$boat1 = new Boat();
$boat1->countryOfRegistration = 'Irealnd';
$boat1->makeModel = 'Super-rich Yacht-pro-99';
$boat1->numPassengers = 25;
$boat1->topSpeed = 20;

var_dump($boat1);