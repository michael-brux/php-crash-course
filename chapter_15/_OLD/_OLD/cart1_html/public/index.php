<?php

$products = [];
$products[] = [
        'name' => 'Peanut Butter Sandwich',
        'type' => 'savory',
        'price' => 1.00,
        'quantity' => 1,
        'image' => 'peanut_butter.png'];

$products[] = [
        'id' => 22,
        'name' => 'Slice of cheesecake',
        'type' => 'sweet',
        'price' => 2.00,
        'quantity' => 1,
        'image' => 'chocolate_cheese_cake.png'];

$products[] = [
        'name' => 'Pinapple',
        'type' => 'fruit',
        'price' => 3.00,
        'quantity' => 1,
        'image' => 'pineapple.png'];

$products[] = [
        'name' => 'Jelly Donut',
        'type' => 'sweet',
        'price' => 4.50,
        'quantity' => 6,
        'image' => 'jellydonut.png'];

$products[] = [
        'name' => 'Banana',
        'type' => 'fruit',
        'price' => 0.50,
        'quantity' => 1,
        'image' => 'banana.png'];

//require_once __DIR__ . '/../templates/products.php';

$cartItems = $products;
//require_once __DIR__ . '/../templates/cart.php';
require_once __DIR__ . '/../templates/products.php';
