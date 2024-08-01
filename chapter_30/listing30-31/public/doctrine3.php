<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

use Mattsmithdev\ProductRepository;
use Mattsmithdev\OrmHelper;

OrmHelper::setEntityManager($entityManager);

// -- Create 2 categories ---
$category1 = new \Mattsmithdev\Category();
$category1->setName('HARDWARE');
$entityManager->persist($category1);

$category2 = new \Mattsmithdev\Category();
$category2->setName('APPLIANCES');
$entityManager->persist($category2);

// Push category objects into DB
$entityManager->flush();

// -- Create 2 products ---
$productRepository = new ProductRepository();
$productRepository->deleteAll();

$product1 = new \Mattsmithdev\Product();
$product1->setDescription("small hammer");
$product1->setPrice(4.50);
$product1->setCategory($category1);
$productRepository->insert($product1);

$product2 = new \Mattsmithdev\Product();
$product2->setDescription("fridge");
$product2->setPrice(200);
$product2->setCategory($category2);
$productRepository->insert($product2);

// Retrieve products from Database
$products = $productRepository->findAll();
if (empty($products)) {
    print 'no products found in DB';
} else {
    foreach ($products as $product) {
        print "Product OBJECT = ID: {$product->getId()}, "
            . "Description: {$product->getDescription()} // "
            . "Category = {$product->getCategory()->getName()}\n";

    }
}
