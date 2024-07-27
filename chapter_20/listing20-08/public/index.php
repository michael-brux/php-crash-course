<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MathPHP\Statistics\Average;

$numbers = [13, 18, 13, 14, 13, 16, 14, 21, 13];
$numbersString = implode(', ', $numbers);
$mean = Average::mean($numbers);
print "average of [ $numbersString ] = $mean";