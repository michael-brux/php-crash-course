<?php
require_once __DIR__ . '/my_functions.php';

$text1 = 'three';
$number1 = string_to_int($text1);
print int_to_message($number1);

$text2 = 'onee';
$number2 = string_to_int($text2);
print int_to_message($number2);

print int_to_message(string_to_int('four'));
