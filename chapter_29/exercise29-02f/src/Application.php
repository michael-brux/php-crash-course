<?php

namespace Mattsmithdev;

class Application
{
    private BookController $bookController;

    public function __construct()
    {
        $this->bookController = new BookController();
    }
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        switch ($action) {
            case 'processCreate':
                $author = filter_input(INPUT_POST, 'author');
                $title = filter_input(INPUT_POST, 'title');
                $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT,
                    FILTER_FLAG_ALLOW_FRACTION);
                $this->bookController->processCreate($author, $title, $price);
                break;

            case 'processEdit':
                $id = filter_input(INPUT_GET, 'id');
                $author = filter_input(INPUT_POST, 'author');
                $title = filter_input(INPUT_POST, 'title');
                $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT,
                    FILTER_FLAG_ALLOW_FRACTION);
                $this->bookController->processEdit($id, $author, $title, $price);
                break;

            case 'create':
                $this->bookController->create();
                break;

            case 'deleteAll':
                $this->bookController->deleteAll();
                break;

            case 'delete':
                $id = filter_input(INPUT_GET, 'id');
                $this->bookController->delete($id);
                break;

            case 'show':
                $id = filter_input(INPUT_GET, 'id');
                $this->bookController->show($id);
                break;

            case 'edit':
                $id = filter_input(INPUT_GET, 'id');
                $this->bookController->edit($id);
                break;

            case 'books':
            default:
                $this->bookController->list();
        }
    }


}