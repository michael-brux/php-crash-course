<?php
function print_timestamp(string $dateString): void
{
    $date = new DateTimeImmutable($dateString);
    print $date->format('D, F j, Y  g.i:s');
    print ' / timestamp = ' . $date->getTimestamp() . PHP_EOL;
}
print_timestamp('1969-12-31T23:59:00');
print_timestamp('1970-01-01T00:00:00');
print_timestamp('1970-01-01T00:02:00');
print_timestamp('2009-08-02T00:00:00');
