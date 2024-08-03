<?php
foreach ($cartItems as $id => $quantity):
    $product = $products[$id];
    $price = $product['price'];
    $subtotal = $quantity * $price;

    // Update total
    $total += $subtotal;

    // Format prices to 2 d.p.
    $price = number_format($price, 2);
    $subtotal = number_format($subtotal, 2);

$total = 0;
$pageTitle = 'Shopping Cart';

require_once '_header.php';
?>

<div class="row">
    <div class="col-2 fw-bold text-center">
        Image
    </div>

    <div class="col-4 fw-bold">
        Item
    </div>

    <div class="col fw-bold text-right">
        Price
    </div>

    <div class="col-3 fw-bold text-center">
        Quantity
    </div>

    <div class="col fw-bold text-right">
        Subtotal
    </div>

    <div class="col fw-bold">
        Action
    </div>
</div>
