<?php
$country = 'Ireland';

$currency = match ($country) {
    'UK' => 'pound',
    'Ireland' => 'euro',
    'France' => 'euro',
    'Spain' => 'euro',
    'USA' => 'dollar',
    default => '(country not recognized)'
};

print "The currency of $country is the $currency";
