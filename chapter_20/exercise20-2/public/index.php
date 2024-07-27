<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Product;

$p1 = new Product();
$p1->setId(7);
$p1->setDescription('hammer');
$p1->setPrice(9.99);

var_dump($p1);