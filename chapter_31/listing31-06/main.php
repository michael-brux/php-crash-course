<?php
$interval1 = DateInterval::createFromDateString('30 seconds');
$interval2 = DateInterval::createFromDateString('1 day');

$date1 = new DateTimeImmutable();
$date2 = $date1->add($interval1);
$date3 = $date1->sub($interval2);

print '$date1 = ' . $date1->format(DateTimeInterface::ATOM) . PHP_EOL;
print '$date2 = ' . $date2->format(DateTimeInterface::ATOM) . PHP_EOL;
print '$date3 = ' . $date3->format(DateTimeInterface::ATOM) . PHP_EOL;
