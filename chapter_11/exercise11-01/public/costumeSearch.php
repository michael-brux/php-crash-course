<?php
//----- (1) LOGIC -----
$hero = filter_input(INPUT_GET, 'hero');
?>

<!-- (2) HTML template output -->
<!doctype html> <html><head><title>process</title></head><body>
Sorry we are out of stock of <strong><?= $hero ?></strong> costumes - how about a Mickey Mouse hat?