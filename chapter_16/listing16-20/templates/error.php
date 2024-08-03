<?php
$pageTitle = 'Error page';
require_once '_header.php';
?>

<div class="alert alert-danger" role="alert">
    Sorry, there was a problem:
    <p>
        <?= $message ?>
    </p>
</div>
</body>
</html>
