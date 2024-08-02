<?php
$total = 0;

do {
    $costString = readline("enter item cost: ");

    if (is_numeric($costString)) {
        $total = floatval($costString);
    }
} while ($total < 100);

print "grant total = \$$total\n";
