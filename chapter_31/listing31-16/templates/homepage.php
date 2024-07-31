<!doctype html>
<html lang="en">
<head><title>Sun Data</title></head>
<body>
<?php if (!empty($errorMessage)): ?>
<p style="background-color: pink; padding: 2rem">
    <?= $errorMessage ?>
</p>
<?php endif; ?>

<form action="/?action=processForm" method="post">
    <p>
        Address:
        <input name="address">
    </p>
    <p>
        2 <input name="date" type="date">
    </p>
    <input type="submit">
</form>
</body>
</html>
