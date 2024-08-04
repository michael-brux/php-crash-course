<?php
//----- (1) LOGIC -----
$username = filter_input(INPUT_POST, 'username');
$password =  filter_input(INPUT_POST, 'passsword');
?>

<!-- (2) HTML template output -->
<!doctype html> <html><head><title>login</title></head><body>
Your username was: <?= $username ?>
<br>
Your password was: <?= $password ?>

