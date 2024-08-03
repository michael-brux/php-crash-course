<?php
require_once 'my_functions.php';

print 'the larger of 4.9 and 5.1 = ' . which_is_larger(4.9, 5.1);
print PHP_EOL;

print 'the larger of 21.5 and 19 = ' . which_is_larger(21.5, 19);
print PHP_EOL;

$result = which_is_larger(3, 3);
print 'the larger of 3 and 3 = ' . $result;
print PHP_EOL;

var_dump($result);


