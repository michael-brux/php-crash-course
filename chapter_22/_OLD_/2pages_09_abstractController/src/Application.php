<?php


namespace Mattsmithdev;

class Application
{
    public function run()
    {
        $defaultController = new DefaultController();
        $productController = new ProductController();
        $action = filter_input(INPUT_GET, 'action');
        switch ($action) {
            case 'products':
                $productController->productList();
                break;

            case 'contact':
                $defaultController->contactDetails();
                break;

            case 'home':
            default:
                $defaultController->homepage();
        }
    }
}