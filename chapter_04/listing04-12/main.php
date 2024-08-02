<?php
$country = 'Ireland';

switch ($country) {
    case 'UK':
        print "The pound is the currency of $country\n";
        break;

    case 'Ireland':
    case 'France':
    case 'Spain':
        print "The euro is the currency of $country\n";
        break;
    case 'USA':
        print "The dollar is the currency of $country\n";
        break;

    default:
        print "(country '$country' not recognized)\n";
}
