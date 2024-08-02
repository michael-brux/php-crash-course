<?php
require_once __DIR__ . '/my_functions.php';

$text1 = 'three';
$number1 = string_to_int($text1);
if (is_null($number1)) {
    print "sorry, could not convert '$text1' to an integer\n";
} else {
    print "'$text1' as an integer = $number1\n";
}

$text2 = 'onee';
$number2 = string_to_int($text2);
if (is_null($number2)) {
    print "sorry, could not convert '$text2' to an integer\n";
} else {
    print "'$text2' as an integer = $number2\n";
}
