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
            $books = $this->getBooks();
            print '<pre>';
            var_dump($books);
            print '</pre>';
        } else {
            print '<p>Application::run() - sorry '
                . '- there was a problem with the database connection';
        }
    }


    public function getBooks(): array
    {
        $sql = 'SELECT * FROM Book';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Book::class);
        $books = $stmt->fetchAll();

        return $books;
    }
}