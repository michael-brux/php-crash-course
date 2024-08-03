<?php
session_start();

require_once __DIR__ . '/../src/functions.php';

$products = getAllProducts();
$cartItems = getShoppingCart();

// default is product list page
$page = 'list.php';

// try to find "action=cart" in query-string variables
$action = filter_input(INPUT_GET, 'action');
if('cart' == $action){
    // if found, change template file to be displayed
    $page = 'cart.php';
}

// read in and execute the $page template
require_once __DIR__ . "/../templates/$page";