<?php

namespace Mattsmithdev;

class BookRepository
{
    private ?\PDO $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    public function findAll(): array
    {
        $sql = 'SELECT * FROM book';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Book::class);
        $books = $stmt->fetchAll();

        return $books;
    }



    public function find(int $id): ?Book
    {
        if (NULL == $this->connection) return NULL;

        $sql = 'SELECT * FROM book WHERE id = :id';
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_CLASS, Book::class);
        $book = $stmt->fetch();

        if ($book == false) {
            return NULL;
        }

        return $book;
    }
}