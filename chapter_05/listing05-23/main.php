<?php
require_once __DIR__ . '/my_functions.php';

$result1 = which_is_smaller(1, 1);
var_dump($result1);
$result2 = which_is_smaller(1, 1, true);
var_dump($result2);
$result3 = which_is_smaller(nullIfSame: true, n1: 1, n2: 1);
var_dump($result3);
