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

            case 'deleteAll':
                $this->bookController->deleteAll();
                break;

            case 'show':
                $id = filter_input(INPUT_GET, 'id');
                $this->bookController->show($id);
                break;

            case 'books':
            default:
                $this->bookController->list();
        }
    }


}