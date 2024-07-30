<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Food;
use Mattsmithdev\Dessert;

try {
    $f1 = new Food('apple');
    print $f1 . PHP_EOL;

//    $f2 = new Dessert('strawberry cheesecake', -1);
    $f2 = new Dessert('strawberry cheesecake', 500);
    print $f2;
} catch (\Exception $e) {
    print '(caught!) - an exception occurred!' . PHP_EOL;
    print $e->getMessage();
} finally {
    print PHP_EOL . '(finally) -- Application finished --';
}