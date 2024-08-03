<?php
// setup data array
$items =
    [
        ['id' => 101, 'description' => 'cake tin', 'price' => 9.99, 'image' => ''],
        ['id' => 102, 'description' => 'cheese cake', 'price' => 19.99, 'image' => ''],
        ['id' => 103, 'description' => 'donut', 'price' => 899.99, 'image' => ''],
    ];
?>


<!doctype html>
<html><head><title>Basket From Array</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!---->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
</head>
<body class="container">
<h1>Your shopping basket</h1>

<?php
foreach ($items as $item):
?>

    <div class="col-lg-3 text-right py-2">
        <?= $item['description'] ?>
        $ <?= $item['price'] ?>
        <a href="/show.php?id=<?= $item['id'] ?>" class="btn btn-primary">Details</a>
    </div>

<?php
endforeach;
?>

</body>
</html>

