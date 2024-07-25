<?php
require_once __DIR__ . '/../src/Product.php';

$product1 = new Product('hammer', 9.99);
print $product1;
print '<br>';

$variable2 = $product1;
print 'changing price via $variable2';
print '<br>';
$variable2->setPrice(20.00);
print $product1;