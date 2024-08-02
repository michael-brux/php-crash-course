<?php
$animals = ['cat', 'dog', 'giraffe', 'elephant'];

if (isset($animals[3])) {
    print "element 3 = $animals[3]\n";
} else {
    print "sorry - there is no element 3 in this array\n";
}

print "(popping last element [3])\n";
array_pop($animals);

if (isset($animals[3])) {
    print "element 3 = $animals[3]\n";
} else {
    print "sorry - there is no element 3 in this array\n";
}
