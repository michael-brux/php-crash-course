<?php
require_once __DIR__ . '/../src/Cat.php';

$cat1 = new SomeObject();
$cat1->name = 'hammer';

$cat1->name = 'Mr. Fluffy';
$cat1->breed = 'long-haired mix';
$cat1->age = 2;

print 'cat1 name = ' . $cat1->name;
print '<br>cat1 breed = ' . $cat1->breed;
print '<br>cat1 age = ' . $cat1->age;
