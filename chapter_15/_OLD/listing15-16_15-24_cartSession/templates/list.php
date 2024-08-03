<?php
$pageTitle = 'List of products';

require_once '_header.php';
?>

<div class="row">

<?php
foreach($products as $id => $product):
// format prices to 2 d.p.
$price = number_format($product['price'], 2);
?>

    <div class="product col text-center">
        <img src="/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        <?= starsHtml($product['stars']) ?>
        <h1 class="fs-1"><?= $product['name'] ?></h1>

        <div class="price">
            $ <?= $price ?>
            <form method="post" action="/?action=addToCart&id=<?= $id ?>" style="display: inline">
                <button class="btn btn-primary btn-sm">Add To Cart</button>
            </form>
        </div>
        <div class="fs-4">
            <?= $product['description'] ?>
        </div>
    </div>

<?php endforeach; ?>
</div>

</body>
</html>