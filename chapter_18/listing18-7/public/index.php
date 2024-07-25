<?php
require_once __DIR__ . '/../src/Product.php';

$product1 = new Product();
$product1->setName('hammer');
$product1->setPrice(9.99);

print "(initial value) product 1 price = {$product1->getPrice()}";

$product1->setPrice(-0.5);
print '<br>(test 1) trying -0.5: ';
print "product 1 price = {$product1->getPrice()}";

$product1->setPrice(22);
print '<br>(test 2) trying 22: ';
print "product 1 price = {$product1->getPrice()}";
