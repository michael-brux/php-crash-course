<?php
$isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
$age = '';

if ($isSubmitted) {
    $age = filter_input(INPUT_POST, 'age');
}
?>

<!doctype html>
<html><head>
    <title>Sticky postback form</title>
</head>
<body>
Enter your age:
<form method="POST">
    <input name="age" value="<?= $age ?>">
    <input type="submit">
</form>
</body></html>
