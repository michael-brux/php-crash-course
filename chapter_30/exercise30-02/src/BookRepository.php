<?php
namespace Tudublin;


use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class BookRepository extends DatabaseTableRepository
{
    public function createAndInsert($title, $author, $price)
    {
        $book = new Book();
        $book->setTitle($title);
        $book->setAuthor($author);
        $book->setPrice($price);

        $this->insert($book);
    }
}
