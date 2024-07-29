<?php
require_once '../vendor/autoload.php';

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;
use BeginningPHP\Product;

define('PATH_TO_TEMPLATES', __DIR__ . '/../templates');

$loader = new FilesystemLoader(PATH_TO_TEMPLATES);
$twig = new Environment($loader);

$name = 'matt';
$meals = [
    'breakfast' => 'toast',
    'lunch' => 'salad',
    'dinner' => 'fish and chips',
];

$product1 = new Product();
$product1->setDescription('bag of nails');
$product1->setPrice(10.99);

$template = 'demo.html.twig';
$args = [
    'name' => 'matt',
    'meals' => $meals,
    'product' => $product1
];

$html = $twig->render($template, $args);
print $html;
