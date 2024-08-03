<?php require_once '_header.php'; ?>

<h1>Shopping Cart</h1>

<div id="cart-row">
    <div></div>
    <div></div>
    <div>Unit Price</div>
    <div>Quantity</div>
    <div class="text-right">Sub-total</div>
</div>

<div id="cart-row">
    <div><img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/Grey_cake_tin_without_background.jpg" width="100"></div>
    <div>cheese cake tin</div>
    <div>$ 4.50</div>
    <div>
        <a href="#" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">-</a>
        <span class="spacing">2</span>
        <a href="#" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">+</a>
        <a href="#" class="btn btn-danger btn-sm" tabindex="-1" role="button" aria-disabled="true">DELETE</a>
    </div>
    <div class="text-right">$ 9.00</div>
</div>

<div id="cart-row">
    <div><img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Chocolate_cheese_cake.jpg" width="100"></div>

    <div>slice of cheese cake</div>
    <div>$ 9.99</div>
    <div>
        <a href="#" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">-</a>
        <span class="spacing">1</span>
        <a href="#" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">+</a>
        <a href="#" class="btn btn-danger btn-sm" tabindex="-1" role="button" aria-disabled="true">DELETE</a>
    </div>
    <div class="text-right">$ 9.99</div>
</div>

<div id="cart-row">
    <div></div>
    <div></div>
    <div></div>
    <div>ORDER TOTAL</div>
    <div class="text-right">$ 25.99</div>
</div>
