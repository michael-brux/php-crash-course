<?php
$hourNumber = 14;
if ($hourNumber < 12) {
    print 'Good morning';
} else {
    if ($hourNumber < 17) {
        print 'Good afternoon';
    } else {
        print 'Good day';
    }
}
