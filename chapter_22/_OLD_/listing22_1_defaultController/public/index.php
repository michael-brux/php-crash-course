<?php
require_once '../vendor/autoload.php';

use BeginningPHP\DefaultController;
$defaultController = new DefaultController();

$action = filter_input(INPUT_GET, 'action');

switch ($action){
    case 'contact':
        $defaultController->displayContactUs();
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
