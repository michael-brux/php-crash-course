<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Book;
use Tudublin\BookRepository;

$bookRepository = new BookRepository();

$bookRepository->resetTable();

// use handy method added to MovieRepository to create and insert object
$bookRepository->createAndInsert('The Green Book', 'Aaron A. Ireland', 9.99);
$bookRepository->createAndInsert('The Complete Sherlock Holmes', 'Sir Arthur Connan Doyle', 59.99);

// add new object without using createAndInsert(..,.)
$book1 = new Book();
$book1->setTitle('PHP Crash Course');
$book1->setPrice(59.99);
$book1->setAuthor('Matt Smith');
$bookRepository->insert($book1);

$books = $bookRepository->findAll();
print '<pre>';
var_dump($books);
