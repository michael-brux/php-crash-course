<?php
function dateFromTimestamp(int $timestamp, DateTimeZone $dateTimeZone): string
{
    $d1 = new \DateTimeImmutable();
    $d2 = $d1->setTimestamp($timestamp);
    $d3 = $d2->setTimezone($dateTimeZone);

    return $d3->format('H:i:s');
}