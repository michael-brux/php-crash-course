<!doctype html>
<html>
<head>
    <title>Shopping site: Product List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />-->

    <link rel="stylesheet" href="/css/cart.css">
</head>

<body class="container ">

<h1>List of Products</h1>

<div class="row">

<?php foreach($products as $id => $product):
// format prices to 2 d.p.
$price = number_format($product['price'], 2);
?>

    <div class="col-md-2 text-center">
        <img src="/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        <?= starsHtml($product['stars']) ?>
        <h4><?= $product['name'] ?></h4>
        <div class="price">
            $ <?= $price ?>
            <a href="/?action=addToCart&id=<?= $id ?>" class="btn btn-primary btn-sm">Add To Cart</a>
        </div>
        <?= $product['description'] ?>
    </div>


<?php endforeach; ?>
</div>

</body>
</html>