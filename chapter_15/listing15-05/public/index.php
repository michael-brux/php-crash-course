<?php
require_once __DIR__ . '/../src/functions.php';

$products = [];

$products['010'] = [
    'name' => 'Sandwich',
    'description' =>
        'A filling, savory snack of peanut butter and jelly.',
    'price' => 4.00,
    'stars' => 4,
    'image' => 'peanut_butter.png'
];

$products['025'] = [
    'name' => 'Slice of cheesecake',
    'description' =>
        'Treat yourself to a chocolate-covered cheesecake slice.',
    'price' => 2.00,
    'stars' => 5,
    'image' => 'chocolate_cheese_cake.png'
];

$products[] = [
    'name' => 'Pinapple',
    'description' => 'A piece of exotic fruit.',
    'price' => 3.00,
    'stars' => 2,
    'image' => 'pineapple.png'];

$products[] = [
    'name' => 'Jelly Donut',
    'description' =>
        'The best type of donut - filled with sweet jam.',
    'price' => 4.50,
    'stars' => 3,
    'image' => 'jellydonut.png'];

$products[] = [
    'name' => 'Banana',
    'description' =>
        'The basis for a good smoothie and high in potassium.',
    'price' => 0.50,
    'stars' => 5,
    'image' => 'banana.png'];

require_once __DIR__ . '/../templates/list.php';
