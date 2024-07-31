<?php

namespace Mattsmithdev;

class Application
{
    private DefaultController $defaultController;
    private ProductController $productController;

    public function __construct()
    {
        $this->defaultController = new DefaultController();
        $this->productController = new ProductController();
    }

    public function run(): void
    {
        $action = filter_input(INPUT_GET, 'action');

        switch ($action)
        {
            case 'products':
                $this->productController->list();
                break;

            case 'show':
                $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                if (empty($id)) {
                    $this->defaultController->error('error - To show a product, an integer ID must be provided');
                } else {
                    $this->productController->show($id);
                }
                break;

            default:
                $this->defaultController->homepage();
        }
    }

}