<?php
$appleJuice = 'apple juice is made from apples.';
$grapeString = str_replace('apple', 'grapefruit', $appleJuice);

print $grapeString;

$newStringCaps = ucwords($grapeString);

print PHP_EOL . $newStringCaps;
