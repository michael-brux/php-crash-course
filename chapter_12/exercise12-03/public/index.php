<?php
$isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
$isValid = true;
$age = '';

if ($isSubmitted) {
    $age = filter_input(INPUT_POST, 'age');

    if (!is_numeric($age)) {
        $isValid = false;
        $errorMessage = 'invalid - age must be numeric!';
    }
}

if ($isSubmitted && $isValid) {
    print 'you will be ' . $age + 1 . ' next birthday!';
    die(); // End script processing here
}
?>

<!doctype html>
<html><head>
    <title>Sticky postback form</title>
    <style>.error { background-color: pink; padding: 1rem;}</style>

</head>
<body>
Enter your age:
<form method="POST">
    <?php if ($isSubmitted && !$isValid): ?>
        <div class="error"><?= $errorMessage ?></div>
    <?php endif; ?>
    <input name="age" value="<?= $age ?>">
    <input type="submit">
</form>
</body></html>
