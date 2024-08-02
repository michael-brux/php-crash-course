<?php
require_once __DIR__ . '/my_functions.php';

$spacer = '';
print_stars(1, $spacer);
print_stars(5, $spacer);
print_stars(9, $spacer);
print_stars(13, $spacer);
print_stars(1, $spacer);
$result = print_stars(1, $spacer);

var_dump($result);
