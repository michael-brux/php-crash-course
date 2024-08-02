<?php
$rainfallValues = [
    'jan' => 10,
    'feb' => 8,
    'march' => 12
];

unset($rainfallValues['feb']);

print "-- Monthly rainfall --\n";
foreach ($rainfallValues as $key => $rainfallValue) {
    print "$key: $rainfallValue\n";
}
