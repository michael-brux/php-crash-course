<?php
require_once __DIR__ . '/../src/functions.php';

$products = getAllProducts();
$cartItems = getShoppingCart();

// Choose page to display
$page = 'list.php';
$action = filter_input(INPUT_GET, 'action');
if ('cart' == $action) {
    // If found, change template file to be displayed
    $page = 'cart.php';
}
require_once __DIR__ . "/../templates/$page";
