<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Food;
use Mattsmithdev\Dessert;

$calories = -1; // Negative invalid argument
$calories = 500; // Valid
$calories = 6000; // General exception

try {
    $f2 = new Dessert('strawberry cheesecake', $calories);
    print $f2;
} catch (\InvalidArgumentException $e) {
    print '(caught!) - an Invalid Argument Exception occurred!' . PHP_EOL;
    print $e->getMessage();
}  catch (\Exception $e) {
        print '(caught!) - a general Exception occurred!' . PHP_EOL;
        print $e->getMessage();
} finally {
    print PHP_EOL . '(finally) -- Application finished --';
}