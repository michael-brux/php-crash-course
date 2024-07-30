<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Product;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$debugFile = __DIR__ . '/../logs/debug.log';
$logger = new Logger('demo');
$logger->pushHandler(new StreamHandler($debugFile));

try {
    $p1 = new Product('hammer', -1);
} catch (\Exception $e) {
    $logger->error('problem creating new product', ['exception' => $e]);
}