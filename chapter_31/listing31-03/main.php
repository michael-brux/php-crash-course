<?php
$now = new DateTimeImmutable();

$formattedDateString = $now->format('l \t\h\e jS \o\f F Y \a\t i \m\i\n\s \p\a\s\t ga');
print 'now (nice format): ' . $formattedDateString . PHP_EOL;
