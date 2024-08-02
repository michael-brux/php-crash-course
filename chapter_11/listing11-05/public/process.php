<?php
//----- (1) LOGIC -----
if (isset($_GET['firstName'])) {
    $firstName = $_GET['firstName'];
    // Now use filters / apply sanitization/validation to extracted value
} else {
    $firstName = NULL;
}
?>

<!-- (2) HTML template output -->
<!doctype html> <html><head><title>process</title></head><body>
Hello <?= $firstName ?>
</body></html>
