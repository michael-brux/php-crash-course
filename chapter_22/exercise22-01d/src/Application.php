<?php

namespace Mattsmithdev;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class Application
{

    public function run(): void
    {
        $defaultController = new DefaultController();
        $productController = new ProductController();

        $action = filter_input(INPUT_GET, 'action');
        switch ($action) {
            case 'products':
                $productController->productList();
                break;

            case  'contact':
                $defaultController->contactUs();
                break;

            case  'privacy':
                $defaultController->privacyPolicy();
                break;

            case 'home':
            default:
                $defaultController->homepage();
        }
    }


}
