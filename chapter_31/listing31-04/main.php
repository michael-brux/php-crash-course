<?php
$today = new DateTime();
print 'today (before modify) = ' . $today->format('Y-m-d') . PHP_EOL;

$tomorrow = $today->modify('+1 day');
print 'today = ' . $today->format('Y-m-d') . PHP_EOL;
print 'tomorrow = ' . $tomorrow->format('Y-m-d') . PHP_EOL;
