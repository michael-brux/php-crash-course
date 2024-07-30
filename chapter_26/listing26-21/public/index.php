<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Application; 
use Mattsmithdev\CacheJson;
use Mattsmithdev\CacheStatic;

$cache1 = new CacheJson();
$cache2 = new CacheStatic();
$app = new Application($cache1);

$app->run();