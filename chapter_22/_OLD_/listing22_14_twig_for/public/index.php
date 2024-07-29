<?php
require_once '../vendor/autoload.php';

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;
use BeginningPHP\Product;

define('PATH_TO_TEMPLATES', __DIR__ . '/../templates');

$loader = new FilesystemLoader(PATH_TO_TEMPLATES);
$twig = new Environment($loader);

$meals = [
    'breakfast' => 'toast',
    'lunch' => 'salad',
    'dinner' => 'fish and chips',
];

$template = 'demo.html.twig';
$args = [
    'meals' => $meals,
];

$html = $twig->render($template, $args);
print $html;
