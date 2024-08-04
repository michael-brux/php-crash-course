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
        $action = filter_input(INPUT_GET, 'action');
        switch ($action) {
            case 'books':
                $this->listBooks();
                break;

            default:
                $this->homepage();
        }
    }

    private function homepage()
    {
        require_once __DIR__ . '/../templates/homepage.php';
    }

    private function listbooks()
    {
        if (NULL != $this->connection){
            $books = $this->getBooks();
            require_once __DIR__ . '/../templates/listBooks.php';
            print '</pre>';
        } else {
            print '<p>Application::run() - sorry '
                . '- there was a problem with the database connection';
        }
    }


    private function getBooks(): array
    {
        $sql = 'SELECT * FROM Book';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Book::class);
        $books = $stmt->fetchAll();

        return $books;
    }
}