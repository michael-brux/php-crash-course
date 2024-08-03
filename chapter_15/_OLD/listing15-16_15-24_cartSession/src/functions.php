<?php
function displayProducts(): void
{
    $products = getAllProducts();
    require_once __DIR__ . '/../templates/list.php';
}

function displayCart(): void
{
    $products = getAllProducts();
    $cartItems = getShoppingCart();

    if (!empty($cartItems)) {
        require_once __DIR__ . '/../templates/cart.php';
    } else {
        require_once __DIR__ . '/../templates/emptyCart.php';
    }
}

function starsHtml($stars): string
{
    $s = '';
    switch ($stars) {
        case 0:

            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            break;

        case 1:
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            break;

        case 2:
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            break;

        case 3:
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            break;

        case 4:
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star-empty"></span>';
            break;

        case 5:
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
            $s .= '<span class="glyphicon glyphicon-star"></span>';
    }

    return $s;
}

function getAllProducts(): array
{
    $products = [];
    $products['010'] = [
        'name' => 'Sandwich',
        'description' => 'A filling, savory snack of peanut butter and jelly.',
        'price' => 4.00,
        'stars' => 4,
        'image' => 'peanut_butter.png'];

    $products['025'] = [
        'name' => 'Slice of cheesecake',
        'description' => 'Treat yourself to a chocolate covered cheesecake slice.',
        'price' => 2.00,
        'stars' => 5,
        'image' => 'chocolate_cheese_cake.png'];

    $products['005'] = [
        'name' => 'Pinapple',
        'description' => 'A piece of exotic fruit.',
        'price' => 3.00,
        'stars' => 2,
        'image' => 'pineapple.png'];

    $products['021'] = [
        'name' => 'Jelly Donut',
        'description' => 'The best type of donut - filled with sweet jam.',
        'price' => 2.50,
        'stars' => 3,
        'image' => 'jellydonut.png'];

    $products['002'] = [
        'name' => 'Banana',
        'description' => 'The basis for a good smoothie and high in potassium.',
        'price' => 0.50,
        'stars' => 5,
        'image' => 'banana.png'];

    return $products;
}


function getShoppingCart(): array
{
    // default is empty shopping cart array
    $cartItems = [];

    if (isset($_SESSION['cart'])) {
        $cartItems = $_SESSION['cart'];
    }

    return $cartItems;
}

function addItemToCart($id): void
{
    $cartItems = getShoppingCart();
    $cartItems[$id] = 1;

    $_SESSION['cart'] = $cartItems;
}

function removeItemFromCart($id): void
{
    $cartItems = getShoppingCart();
    unset($cartItems[$id]);
    $_SESSION['cart'] = $cartItems;
}

function increaseCartQuantity($id)
{
    $cartItems = getShoppingCart();
    $quantity = getQuantity($id, $cartItems);
    $newQuantity = $quantity + 1;

    $cartItems[$id] = $newQuantity;

    $_SESSION['cart'] = $cartItems;
}

function reduceCartQuantity($id): void
{
    $cartItems = getShoppingCart();
    $quantity = getQuantity($id, $cartItems);
    $newQuantity = $quantity - 1;

    if ($newQuantity < 1) {
        unset($cartItems[$id]);
    } else {
        $cartItems[$id] = $newQuantity;
    }

    $_SESSION['cart'] = $cartItems;
}

function getQuantity($id, $cart): int
{
    if (isset($cart[$id])) {
        return $cart[$id];
    }

    // if $id not found then return zero
    return 0;
}


