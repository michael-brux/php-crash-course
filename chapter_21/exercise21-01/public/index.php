<?php
$name = filter_input(INPUT_GET, 'name');
?>

<!DOCTYPE html>
<html>
<head>
    <title>chapter 21</title>
</head>
<body>
<p>
    Hello <?= $name ?>
</p>
</body>
</html>
