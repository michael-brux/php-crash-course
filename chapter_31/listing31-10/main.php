<?php
function prettyPrintDatetime(string $name, DateTimeImmutable $date)
{
    print '---------' . $name . '---------' . PHP_EOL;
    print $date->format(DATE_ATOM) . ' ' . $date->getTimezone()->getName(). PHP_EOL . PHP_EOL;
}

$iceCreamDay = '2009-08-02';
$localDatetime = new DateTimeImmutable($iceCreamDay);
$utcDatetime = new DateTimeImmutable($iceCreamDay, new DateTimeZone('UTC'));
$londonDatetime = new DateTimeImmutable($iceCreamDay, new DateTimeZone('Europe/London'));
$parisDatetime = new DateTimeImmutable($iceCreamDay, new DateTimeZone('Europe/Paris'));
$hobartDatetime = new DateTimeImmutable($iceCreamDay, new DateTimeZone('Australia/Hobart'));
$threeHoursAhead = new DateTimeImmutable('2000-01-01T10:00:00+03:00');


print 'local time zone = ' . date_default_timezone_get() . PHP_EOL;
prettyPrintDatetime('local', $localDatetime);
prettyPrintDatetime('UTC', $utcDatetime);
prettyPrintDatetime('London', $londonDatetime);
prettyPrintDatetime('Paris', $parisDatetime);
prettyPrintDatetime('Hobart', $hobartDatetime);
prettyPrintDatetime('+03', $threeHoursAhead);
