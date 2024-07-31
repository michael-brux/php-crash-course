<?php
$date1 = new DateTimeImmutable('1968-11-22');
$date2 = new DateTimeImmutable('1968-11-16');

$interval = $date1->diff($date2);
print '$interval = ' . $interval->format('%m months, %d days, %i minutes, %s seconds');
