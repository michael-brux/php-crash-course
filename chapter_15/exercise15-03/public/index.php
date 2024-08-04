<?php
session_start();

require_once __DIR__ . '/../src/functions.php';

// Try to find "action" in query-string variables
$action = filter_input(INPUT_GET, 'action');
switch ($action){

    case 'cart':
        displayCart();
        break;

    case 'addToCart':
        $id = filter_input(INPUT_GET, 'id');

        $products = getAllProducts();
        $productExists = array_key_exists($id, $products);
        $validId = !empty($id) && $productExists;
        if($validId){
            addItemToCart($id);
            displayCart();
        } else {
            displayProducts();
        }
        break;

    case 'removeFromCart':
        $id = filter_input(INPUT_GET, 'id');
        removeItemFromCart($id);
        displayCart();
        break;

    case 'changeCartQuantity':
        $id = filter_input(INPUT_GET, 'id');
        $changeDirection = filter_input(INPUT_POST, 'changeDirection');

        if ($changeDirection == 'increase') {
            increaseCartQuantity($id);
        } else {
            reduceCartQuantity($id);
        }

        displayCart();
        break;

    case 'emptyCart':
        killSession();
        displayCart();
        break;



    default:
        displayProducts();
}
