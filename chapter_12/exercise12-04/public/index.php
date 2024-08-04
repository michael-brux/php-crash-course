<?php
$isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
$isValid = true;
$email = '';

if ($isSubmitted) {
    $email = filter_input(INPUT_POST, 'email');

    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (!$validEmail) {
        $isValid = false;
        $errorMessage = 'error - not a valid email address';
    }
}

if ($isSubmitted && $isValid) {
    print 'well done. <b>' . $email . '</b> is a valid email address';
    die(); // End script processing here
}
?>

<!doctype html>
<html><head>
    <title>Sticky postback form</title>
    <style>.error { background-color: pink; padding: 1rem;}</style>

</head>
<body>
<p>
    Enter your emil address
</p>
<form method="POST">
    <?php if ($isSubmitted && !$isValid): ?>
        <div class="error"><?= $errorMessage ?></div>
    <?php endif; ?>
    <input name="email" value="<?= $email ?>">
    <input type="submit">
</form>
</body></html>
