<?php
require_once __DIR__ . '/my_functions.php';

$result1 = which_is_smaller(3.5, 2);
print "the smaller of 3.5 and 2 = $result1\n";

$result2 = which_is_smaller(3, '55');
print "the smaller of 3 and '55' = $result2\n";

$result3 = which_is_smaller(false, -8);
print "the smaller of false and -8 = $result3\n";
