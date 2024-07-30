<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Book;
use Mattsmithdev\Donut;

$book = new Book();
$book->setTitle('Life of Pi');
$book->setPrice(20.00);


print "Book {$book->getTitle()}\n";
print "  price (excl. tax) = \${$book->getPrice()}\n";
print "  price (incl. tax) = \${$book->getPriceIncludingSalesTax()}\n\n";

$donut = new Donut();
$donut->setTopping('strawberry icing');
$donut->setPrice(10.00);


print "Book {$donut->getTopping()}\n";
print "  price (excl. tax) = \${$donut->getPrice()}\n";
print "  price (incl. tax) = \${$donut->getPriceIncludingSalesTax()}\n";
