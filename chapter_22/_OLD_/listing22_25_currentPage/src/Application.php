<?php


namespace BeginningPHP;


class Application
{
    public function run()
    {
        $defaultController = new DefaultController();
        $action = filter_input(INPUT_GET, 'action');

        switch ($action) {
            case 'contact':
                $defaultController->displayContactDetails();
                break;

            case 'enquiryForm':
                $defaultController->displayForm();
                break;

            case 'processForm':
                $defaultController->processForm();
                break;

            default:
                $defaultController->displayHomePage();
        }
    }
}