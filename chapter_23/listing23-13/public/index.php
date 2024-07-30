<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Application;

try {
    $app = new Application();
    $app->run();
} catch (\Exception $e) {
    print '(index.php) Exception caught!';
} finally {
    print PHP_EOL;
    print '(index.php) finally -- Application finished --';
}