<?php
$region = 'Europe';

if ($region == 'Europe') {
    $currency = 'euro';
} else {
    $currency = 'dollar';
}

print "The currency of $region is the $currency (from if...else statement)\n";

$region = 'USA';
$currency = ($region == 'Europe') ? 'euro' : 'dollar';

print "The currency of $region is the $currency (from ternary operator statement)\n";
