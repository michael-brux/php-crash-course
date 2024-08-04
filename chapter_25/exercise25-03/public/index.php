<?php
require __DIR__ .  '/../vendor/autoload.php';

use Mattsmithdev\Dessert;
use Mattsmithdev\DietType;

$desert = new Dessert();
$desert->setName('Eton Mess ');
$desert->setDiet(DietType::VEGETARIAN);

print $desert;

