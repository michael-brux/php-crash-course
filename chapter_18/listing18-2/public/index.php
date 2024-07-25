<?php
require_once __DIR__ . '/../src/Product.php';

$product1 = new Product();
$product1->name = 'hammer';

print 'product 1 name = ' . $product1->name;