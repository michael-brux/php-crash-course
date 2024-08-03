<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once __DIR__ . '/../src/controllerFunctions.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);


switch ($action){
    case 'setBackgroundPink':
        changeBackgroundColor('pink');
        break;

    case 'setBackgroundGrey':
        changeBackgroundColor('grey');
        break;

    case 'setFontSize15':
        changeFontSize(1.5);
        break;

    case 'setFontSize2':
        changeFontSize(2);
        break;

    case 'resetSession':
        resetSession();
        break;

    default:
        indexAction();
}

