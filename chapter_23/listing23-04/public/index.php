<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Food;
use Mattsmithdev\Dessert;

$f1 = new Food('apple');
print $f1 . PHP_EOL;

$f2 = new Dessert('strawberry cheesecake', -1);
print $f2;