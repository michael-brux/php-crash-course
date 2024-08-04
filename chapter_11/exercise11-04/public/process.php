<?php
//----- (1) LOGIC -----
$expensiveCar = filter_input(INPUT_GET, 'expensiveCar');

if ($expensiveCar == 'yes') {
    $message = 'you should buy an electric car';
} else {
    $message = 'you should buy a gas car';
}
?>

<!-- (2) HTML template output -->
<!doctype html>
<html><head><title>process</title></head><body>
<?= $message ?>
</body></html>