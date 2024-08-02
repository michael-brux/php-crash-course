<?php
$animals = ['cat', 'dog', 'giraffe', 'elephant'];

foreach ($animals as $key => $animal) {
    print "$animal";
    if ($key != array_key_last($animals)) {
        print ", ";
    }
}
