<?php
$productCode = filter_input(INPUT_GET, 'productCode');
$price = filter_input(INPUT_GET, 'price');
?>
<h1>Data received:</h1>
<p>Product Code: <?= $productCode ?></p>
<p>Price: <?= $price ?></p>
