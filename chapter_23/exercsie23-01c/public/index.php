<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Product;

try {

    $p1 = new Product('hammer', -2);

    $p1 = new Product('hammer', 2221119999);

    $p1 = new Product('', 22);

    $p1 = new Product('hammer', 22);

    var_dump($p1);
} catch (InvalidArgumentException $e) {
    print "InvalidArgumentException caught: " . $e->getMessage();
} catch (Exception $e) {
    print "Exception caught: " . $e->getMessage();
}

print '--- execution completed --';