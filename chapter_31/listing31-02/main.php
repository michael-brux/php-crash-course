<?php
$now = new DateTimeImmutable();

$atomDateString = $now->format(DateTimeInterface::ATOM);
print 'now (ISO-8601): ' . $atomDateString . PHP_EOL;
