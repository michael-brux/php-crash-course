<?php
session_start();

use Itb\controllerFunctions;

require_once __DIR__ . '/../vendor/autoload.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$mainController = new controllerFunctions();

switch ($action){
    case 'setBackgroundColorPink':
        $mainController->changeBackgroundColor('pink');
        break;

    case 'setBackgroundColorYellow':
        $mainController->changeBackgroundColor('yellow');
        break;

    case 'about':
        $mainController->aboutAction();
        break;

    default:
        $mainController->indexAction();
}