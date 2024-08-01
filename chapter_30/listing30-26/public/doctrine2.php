<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

use Mattsmithdev\Product;

$product1 = new Product();
$product1->setDescription("small hammer");
$product1->setPrice(4.50);

$entityManager->persist($product1);
$entityManager->flush();

// Retrieve products from Database
$productRepository = $entityManager->getRepository(Product::class);
$products = $productRepository->findAll();
foreach ($products as $product) {
    print "Product OBJECT = ID: {$product->getId()}, "
        . "Description: {$product->getDescription()}\n";
}
