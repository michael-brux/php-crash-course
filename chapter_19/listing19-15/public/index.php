<?php
require_once __DIR__ . '/../src/Food.php';
require_once __DIR__ . '/../src/Dessert.php';

$f1 = new Food('apple');
print $f1;
print '<br>';
$f2 = new Dessert('strawberry cheesecake');
print $f2;