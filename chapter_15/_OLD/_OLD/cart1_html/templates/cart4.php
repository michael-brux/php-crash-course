<?php
$total = 0;

require_once '_header.php';
?>

<h1>Shopping Cart</h1>

<div id="cart-row">
    <div></div>
    <div></div>
    <div>Unit Price</div>
    <div>Quantity</div>
    <div class="text-right">Sub-total</div>
</div>

<?php foreach($products as $product):
    $name = $product['name'];
    $price = $product['price'];
    $quantity = $product['quantity'];
    $image = $product['image'];
    $subtotal = $quantity * $price;

    // update total
    $total += $subtotal;

    // format prices to 2 d.p.
    $price = number_format($price, 2);
    $subtotal = number_format($subtotal, 2);
?>
<div id="cart-row">
    <div><img src="/images/<?= $image ?>" width="100" alt="<?= $name ?>"></div>


    <div><?= $name ?></div>
    <div>$ <?= $price ?></div>
    <div>
        <a href="#" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">-</a>
        <span class="spacing"><?= $quantity ?></span>
        <a href="#" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">+</a>
        <a href="#" class="btn btn-danger btn-sm" tabindex="-1" role="button" aria-disabled="true">DELETE</a>
    </div>
    <div class="text-right">$ <?= $subtotal ?></div>
</div>
<?php endforeach; ?>

<?php
// format total to 2 d.p.
$total = number_format($total, 2);
?>

<div id="cart-row">
    <div></div>
    <div></div>
    <div></div>
    <div>ORDER TOTAL</div>
    <div class="text-right">$ <?= $total ?></div>
</div>
