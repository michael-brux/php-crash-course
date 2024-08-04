<?php
$extras = filter_input(INPUT_GET, 'extras', options: FILTER_REQUIRE_ARRAY);

if (empty($extras)) {
    $message = '<li>no extra car options selected</li>';
} else {
    $message = '';
    foreach ($extras as $extra) {
        $message .= '<li>' . $extra . '</li>';
    }
}
?>


<!doctype html>
<html><head><title>Car options</title></head>
<body>

<p>
    Your car options were:
</p>


<ul>
    <?= $message ?>
</ul>

</body></html>