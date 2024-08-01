<?php

namespace Mattsmithdev;

class ProductRepository
{
    private ?\PDO $connection = NULL;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    public function findAll(): array
    {
        if (NULL == $this->connection) return [];

        $sql = 'SELECT * FROM product';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);
        $products = $stmt->fetchAll();

        return $products;
    }

    public function find(int $id): ?Product
    {
        if (NULL == $this->connection) return NULL;

        $sql = 'SELECT * FROM product WHERE id = :id';
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);
        $product = $stmt->fetch();

        if ($product == false) {
            return NULL;
        }

        return $product;
    }

    public function deleteAll(): int
    {
        if (NULL == $this->connection) return 0;

        $sql = 'DELETE FROM product';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $numRowsAffected = $stmt->rowCount();

        return $numRowsAffected;
    }
    
    public function delete(int $id): bool
    {
        if (NULL == $this->connection) return false;

        $sql = 'DELETE FROM product WHERE id = :id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $success = $stmt->execute();

        return $success;
    }

    public function insert(string $description, float $price): int
    {
        if (NULL == $this->connection) return -1;

        $sql = 'INSERT INTO product (description, price)'
            . ' VALUES (:description, :price)';
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);

        $success = $stmt->execute();

        if ($success) {
            return $this->connection->lastInsertId();
        } else {
            return -1;
        }
    }

}