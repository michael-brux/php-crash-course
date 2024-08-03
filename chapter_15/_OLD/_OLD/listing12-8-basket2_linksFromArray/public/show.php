<?php
//----- (1) LOGIC -----
$id = filter_input(INPUT_GET, 'id');
?>

<!-- (2) HTML template output -->
<!doctype html> <html><head><title>process item Show Details</title></head><body>
Would show details of item with id = <?= $id ?> here
