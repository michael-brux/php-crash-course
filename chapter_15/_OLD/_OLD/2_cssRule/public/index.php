<?php
session_start();

use Itb\controllerFunctions;

require_once __DIR__ . '/../vendor/autoload.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$mainController = new controllerFunctions();

switch ($action){
    case 'colorRed':
        $mainController->changeColor('red');
        break;

    case 'colorBlue':
        $mainController->changeColor('blue');
        break;

    case 'sizeOne':
        $mainController->changeSize(1);
        break;

    case 'sizeOnePointTwo':
        $mainController->changeSize(1.2);
        break;

    case 'killSession':
        $mainController->forgetSession();
        break;

    default:
        $mainController->indexAction();
}