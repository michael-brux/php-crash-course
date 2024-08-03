<?php
$total = 0;

require_once '_header.php';
?>

<h1>List of Products</h1>

<table class="table table-light">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>

<?php foreach($products as $id => $product):
    // format prices to 2 d.p.
    $price = number_format($product['price'], 2);
?>
    <tr>
        <td><?= $id ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['type'] ?></td>
        <td>$ <?= $price ?></td>
        <td><img src="/images/<?= $product['image'] ?>" width="100" alt="<?= $product['name'] ?>"></td>
        <td><a href="/?action=addToCart&id=<?= $id ?>" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">Add To Cart</a></td>

    </tr>
<?php endforeach; ?>

    </tbody>
</table>