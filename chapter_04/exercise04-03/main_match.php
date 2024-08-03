<?php
$vehicle = 'bus';
$vehicle = 'unknown bad string';
$vehicle = 'bicycle';

$message = match ($vehicle) {
    'bus' => 'Beep beep',
    'train' => 'Runs on tracks',
    'car' => 'Has at least three wheels',
    'helicopter' => 'Can fly',
    'bicycle' => 'You never forget once you\'ve learned',
    default => 'You\'ve chosen the road less traveled',
};

print $message;