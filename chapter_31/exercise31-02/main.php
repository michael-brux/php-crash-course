<?php

$date1 = new DateTimeImmutable('2000-01-01 22:00:00');

$date2 = new DateTimeImmutable('2000-01-02 22:00:00');
$date3 = new DateTimeImmutable('2010-05-06 00:00:00');
$date4 = new DateTimeImmutable('2010-05-06 00:00:30');
$date5 = new DateTimeImmutable('2020-01-01 22:00:00');

print 'date2';
var_dump($date1->diff($date2));

print 'date3';
var_dump($date1->diff($date3));

print 'date4';
var_dump($date1->diff($date4));

print 'date5';
var_dump($date1->diff($date5));