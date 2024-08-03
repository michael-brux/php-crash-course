<?php
$vehicle = 'bus';
//$vehicle = 'unknown bad string';
//$vehicle = 'bicycle';

switch ($vehicle) {
    case 'bus':
        $message = 'Beep beep';
        break;

    case 'train':
        $message = 'Runs on tracks';
        break;

    case 'car':
        $message = 'Has at least three wheels';
        break;

    case 'helicopter':
        $message = 'Can fly';
        break;

    case 'bicycle':
        $message = 'You never forget once you\'ve learned';
        break;

    default:
        $message = 'You\'ve chosen the road less traveled';
}

print $message;