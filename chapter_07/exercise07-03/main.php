<?php
$colors = [
    'yellow',
    'red',
    'blue',
    'green',
    'pink',
];

foreach ($colors as $key => $color) {
    print "color $key = $color\n";
}

array_pop($colors);
print "\nAFTER POP\n";

foreach ($colors as $key => $color) {
    print "color $key = $color\n";
}
