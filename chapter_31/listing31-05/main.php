<?php
function showModify(string $modifier): void
{
    print PHP_EOL. $modifier . PHP_EOL;
    $date1 = new DateTimeImmutable();
    $date2 = $date1->modify($modifier);
    print 'date1 = ' . $date1->format(DateTimeInterface::ATOM) . PHP_EOL;
    print 'date2 = ' . $date2->format(DateTimeInterface::ATOM) . PHP_EOL;
}

showModify('first day of this month');
showModify('+1 day');
showModify('+30 seconds');
showModify('-10 seconds');
showModify('+1 month +3 days +1 seconds');
