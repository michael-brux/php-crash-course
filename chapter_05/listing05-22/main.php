<?php
require_once __DIR__ . '/my_functions.php';

$result1 = which_is_smaller(1, 1);
var_dump($result1);
$result2 = which_is_smaller(1, 1, true);
var_dump($result2);
