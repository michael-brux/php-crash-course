<?php
$today = new DateTimeImmutable();
print 'today: ' . $today->format('l \t\h\e jS \o\f F Y') . PHP_EOL;

$firstOfMonth = $today->modify('first day of this month');
$oneWeekLater = $firstOfMonth->modify('+1 week');

$interval = DateInterval::createFromDateString("1 day");
$period = new DatePeriod($firstOfMonth, $interval, $oneWeekLater);

print '--- first 7 days of current month ---'. PHP_EOL;
foreach ($period as $date) {
    print $date->format('l \t\h\e jS \o\f F Y') . PHP_EOL;
}
