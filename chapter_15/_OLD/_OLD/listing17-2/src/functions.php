<?php
function listProducts()
{
    $products = getProducts();
    require_once __DIR__ . '/../templates/list.php';
}

function starsHtml($stars)
{
    switch ($stars) {
        case 0:
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;

        case 1:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;

        case 2:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;

        case 3:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;

        case 4:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;

        case 5:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
    }
}

function getProducts()
{
    $products = [];
    $products[] = [
        'name' => 'Sandwich',
        'description' => 'A filling, savoury snack of peanut butter and jelly.',
        'price' => 1.00,
        'stars' => 4,
        'image' => 'peanut_butter.png'];

    $products[] = [
        'id' => 22,
        'name' => 'Slice of cheesecake',
        'description' => 'Treat yourself to a chocolate covered cheesecake slice.',
        'price' => 2.00,
        'stars' => 5,
        'image' => 'chocolate_cheese_cake.png'];

    $products[] = [
        'name' => 'Pinapple',
        'description' => 'A piece of exotic fruit.',
        'price' => 3.00,
        'stars' => 2,
        'image' => 'pineapple.png'];

    $products[] = [
        'name' => 'Jelly Donut',
        'description' => 'The best type of donut - filled with sweet jam.',
        'price' => 4.50,
        'stars' => 3,
        'image' => 'jellydonut.png'];

    $products[] = [
        'name' => 'Banana',
        'description' => 'The basis for a good smoothie and high in potassium.',
        'price' => 0.50,
        'stars' => 5,
        'image' => 'banana.png'];

    return $products;
}