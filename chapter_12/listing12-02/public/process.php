<?php
$productCode = filter_input(INPUT_GET, 'productCode');
$price = filter_input(INPUT_GET, 'price');

$errors = [];
if (empty($productCode)) {
    $errors[] = 'missing product code';
} elseif (strlen($productCode) < 3) {
    $errors[] = 'product code too few characters';
}

if (!is_numeric($price)) {
    $errors[] =  'price was not a number';
}

if (sizeof($errors) > 0) {
    // errors
    print 'Data validation errors:<ul>';
    foreach ($errors as $error) {
        print "<li> $error </li>";
    }
    print "</ul>";
} else {
    print 'input data was error free';
}
