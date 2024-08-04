<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Cat;
use Mattsmithdev\Dog;
use Mattsmithdev\Bird;
use Mattsmithdev\DietType;
use Mattsmithdev\PipeOrgan;

$cat = new Cat();
$dog = new Dog();
$bird = new Bird();
$car = new DietType();
$car->fuelType = 'petrol';
$pipeorgan = new PipeOrgan();

print "sound from cat = {$cat->getSound()}\n";
print "sound from dog = {$dog->getSound()}\n";
print "sound from bird = {$bird->getSound()}\n";
print "sound from car = {$car->getSound()}\n";

print "date serve from car = ";
var_dump($car->nextService());

print "sound from car = {$pipeorgan->getSound()}\n";
print "\n date serve from pipe organ = ";
var_dump($pipeorgan->nextService());

