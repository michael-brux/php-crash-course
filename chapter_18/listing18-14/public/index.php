<?php
require_once __DIR__ . '/../src/Product.php';

$product1 = new Product('hammer', 9.99);
$product1->setTaxRate(0.1);
print $product1;
print '<br> ';
print "Product 1 price including tax = {$product1->getPriceIncludingTax()}";
print '<br> ';
print "Product 1 price including tax (2d.p.) = {$product1->getPriceIncludingTaxTwoDecimalPlaces()}";