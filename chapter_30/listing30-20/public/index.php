<?php
require_once __DIR__ . '/../vendor/autoload.php';

session_start();

use Mattsmithdev\Application;
$app = new Application();
$app->run();
