<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Application;

try {
    $app = new Application();
    $app->run();
} catch (Exception $e) {
    print "(index.php) Exception caught: " . $e->getMessage();
}

print '--- (index.php) execution completed --';

