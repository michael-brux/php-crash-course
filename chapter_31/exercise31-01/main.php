<?php

$utc = new DateTimeZone('UTC');
$irish = new DateTimeZone('Eire');
$eastern = new DateTimeZone('EST');

$date1UTC = new DateTimeImmutable('2025-01-01 10:00:00', $utc);
$date2UTC = new DateTimeImmutable('2025-01-01 12:00:00.05', $utc);

$date1Irish = new DateTimeImmutable('2025-01-01 10:00:00', $irish);
$date2Irish = new DateTimeImmutable('2025-01-01 12:00:00.05', $irish);

$date1Eastern = new DateTimeImmutable('2025-01-01 10:00:00', $eastern);
$date2Eastern = new DateTimeImmutable('2025-01-01 12:00:00.05', $eastern);

print PHP_EOL . PHP_EOL . '---- UTC -----';
var_dump($date1UTC);
var_dump($date2UTC);

print PHP_EOL . PHP_EOL . '---- Irish Standard Time -----';
var_dump($date1Irish);
var_dump($date2Irish);

print PHP_EOL . PHP_EOL . '---- Eastern Standard Time -----';
var_dump($date1Eastern);
var_dump($date2Eastern);
