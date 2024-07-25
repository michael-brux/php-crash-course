<?php
require_once __DIR__ . '/../src/Product.php';

$product1 = new Product();
$product1->setName('hammer');
$product1->setPrice(9.99);
print 'product 1 name = ' . $product1->getName();
print ", and price = {$product1->getPrice()}";