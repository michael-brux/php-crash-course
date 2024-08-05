<?php
require_once 'my_functions.php';

$eastern = new DateTimeZone('EST');

$milleniumEveDateNewYork = new DateTimeImmutable('1999-12-31', $eastern);
$timestampNewYork = $milleniumEveDateNewYork->getTimestamp();

// New York
// from: https://latlong.info/united-states/new-york/new-york-city
$newYorkLatitude = 40.71427000;
$newYorkLongitude = -74.00597000;
$newYorkSunData = date_sun_info($timestampNewYork, $newYorkLatitude, $newYorkLongitude);

$newYorkSunrise = dateFromTimestamp($newYorkSunData['sunrise'], $eastern);
$newYorkSunset = dateFromTimestamp($newYorkSunData['sunset'], $eastern);

print "New York\n";
print "sunrise = $newYorkSunrise\n";
print "sunset = $newYorkSunset\n";

// Dublin
// from: https://www.latlong.net/place/dublin-ireland-712.html

$irish = new DateTimeZone('Eire');

$milleniumEveDateDublin = new DateTimeImmutable('1999-12-31', $irish);
$timestampDublin = $milleniumEveDateNewYork->getTimestamp();

$dublinLatitude = 53.350140;
$dublinLongitude = -6.266155;
$dublinSunData = date_sun_info($timestampDublin, $dublinLatitude, $dublinLongitude);

$dublinSunrise = dateFromTimestamp($dublinSunData['sunrise'], $irish);
$dublinSunset = dateFromTimestamp($dublinSunData['sunset'],  $irish);

print "\n\nDublin\n";
print "sunrise = $dublinSunrise\n";
print "sunset = $dublinSunset\n";