<?php

namespace Mattsmithdev;

class Application
{
    private ?\PDO $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    public function run()
    {
        if (NULL != $this->connection){
            $products = $this->getProducts();
            print '<pre>';
            var_dump($products);
            print '</pre>';
        } else {
            print '<p>Application::run() - sorry '
                . '- there was a problem with the database connection';
        }
    }


    public function getProducts(): array
    {
        $sql = 'SELECT * FROM product';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);
        $products = $stmt->fetchAll();

        return $products;
    }
}