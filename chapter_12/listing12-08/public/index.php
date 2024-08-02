<?php
$isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
$isValid = true;
$firstName = '';

if ($isSubmitted) {
    $firstName = filter_input(INPUT_POST, 'firstName');

    if (strlen($firstName) < 3) {
        $isValid = false;
        $errorMessage = 'invalid - name must contain at least 3 letters';
    }
}

if ($isSubmitted && $isValid) {
    print "Hello $firstName";
    die(); // End script processing here
}
?>

<!doctype html>
<html><head>
    <title>Tiny sticky postback form</title>
    <style>.error { background-color: pink; padding: 1rem;}</style>
</head>
<body>
<form method="POST">
    <?php if ($isSubmitted && !$isValid): ?>
        <div class="error"><?= $errorMessage ?></div>
    <?php endif; ?>

    <input name="firstName" value="<?= $firstName ?>">
    <input type="submit">
</form>
</body></html>
