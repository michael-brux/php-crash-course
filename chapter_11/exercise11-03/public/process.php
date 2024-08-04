<?php
//----- (1) LOGIC -----
$age = filter_input(INPUT_GET, 'age');
$nextAge = $age + 1;
?>

<!-- (2) HTML template output -->
<!doctype html>
<html><head><title>process</title></head><body>
you will be <?= $nextAge ?> next birthday
</body></html>