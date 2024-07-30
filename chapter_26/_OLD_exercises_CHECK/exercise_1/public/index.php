<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Book;
$book = new Book();
$book->setTitle('Life of Pi');
$book->setPrice(20.00);


print "Book {$book->getTitle()}\n";
print "  price (excl. tax) = \${$book->getPrice()}\n";
print "  price (incl. tax) = \${$book->getPriceIncludingSalesTax()}\n";
