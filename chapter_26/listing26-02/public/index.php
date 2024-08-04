<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Cat;
use Mattsmithdev\Dog;
use Mattsmithdev\Bird;
use Mattsmithdev\DietType;

$cat = new Cat();
$dog = new Dog();
$bird = new Bird();
$car = new DietType();
$car->fuelType = 'petrol';

print "sound from cat = {$cat->getSound()}\n";
print "sound from dog = {$dog->getSound()}\n";
print "sound from bird = {$bird->getSound()}\n";
print "sound from car = {$car->getSound()}\n";
