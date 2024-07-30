<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Dessert;
use Mattsmithdev\NegativeCaloriesException;

$calories = 500; // Valid
$calories = 6000; // General exception
$calories = -1; // Negative invalid argument

try {
    $f2 = new Dessert('strawberry cheesecake', $calories);
    print $f2;
} catch (NegativeCaloriesException $e) {
    print '(caught!) - a Negative Calories Value Exception occurred!' . PHP_EOL;
    print $e->getMessage();
}  catch (\Exception $e) {
        print '(caught!) - a general Exception occurred!' . PHP_EOL;
        print $e->getMessage();
} finally {
    print PHP_EOL . '(finally) -- Application finished --';
}