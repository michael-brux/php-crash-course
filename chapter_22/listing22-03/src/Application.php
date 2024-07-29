<?php

namespace Mattsmithdev;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class Application
{

    public function run(): void
    {
        $defaultController = new DefaultController();

        $action = filter_input(INPUT_GET, 'action');
        switch ($action) {
            case  'contact':
                $defaultController->contactUs();
                break;

            case 'home':
            default:
                $defaultController->homepage();
        }
    }


}
