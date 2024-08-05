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
        $sql = 'SELECT * FROM Book';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Book::class);
        $books = $stmt->fetchAll();

        return $books;
    }
}