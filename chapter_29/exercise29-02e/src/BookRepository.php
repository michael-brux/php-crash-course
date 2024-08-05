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

    public function deleteAll(): int
    {
        if (NULL == $this->connection) return 0;

        $sql = 'DELETE FROM book';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $numRowsAffected = $stmt->rowCount();

        return $numRowsAffected;
    }

    public function delete(int $id): bool
    {
        if (NULL == $this->connection) return false;

        $sql = 'DELETE FROM book WHERE id = :id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $success = $stmt->execute();

        return $success;
    }

    public function insert(string $author, string $title, float $price): int
    {
        if (NULL == $this->connection) return -1;

        $sql = 'INSERT INTO book (author, title, price)'
            . ' VALUES (:author, :title, :price)';
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':price', $price);

        $success = $stmt->execute();

        if ($success) {
            return $this->connection->lastInsertId();
        } else {
            return -1;
        }
    }
}