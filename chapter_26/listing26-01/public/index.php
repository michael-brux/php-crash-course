<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Cat;
use Mattsmithdev\Dog;
use Mattsmithdev\Bird;

$cat = new Cat();
$dog = new Dog();
$bird = new Bird();
print "sound from cat = {$cat->getSound()}\n";
print "sound from dog = {$dog->getSound()}\n";
print "sound from bird = {$bird->getSound()}\n";
