<?php
$age = 22;
$weight = 80;

$message = <<<EOT
my age is $age
my weight is {$weight}kg

EOT;

print $message;
