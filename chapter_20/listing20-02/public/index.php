<?php
require_once __DIR__ . '/../src/Shirt.php';

$shirt1 = new \Mattsmithdev\Shirt();
$shirt2 = new \Mattsmithdev\Shirt();

print "shirt 1 type = {$shirt1->getType()}";