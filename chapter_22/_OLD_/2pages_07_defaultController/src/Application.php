<?php


namespace Mattsmithdev;

class Application
{
    public function run()
    {
        $defaultController = new DefaultController();
        $action = filter_input(INPUT_GET, 'action');
        switch ($action) {
             case 'contact':
                 $defaultController->contactDetails();
                 break;

            case 'home':
            default:
                $defaultController->homepage();
        }
    }
}