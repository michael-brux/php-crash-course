<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logFile = __DIR__ . '/../logs/mylogs.log';
$logger = new Logger('demo');

$logger->pushHandler(new StreamHandler($logFile));

$logger->warning('I am a warning.');
$logger->error('I am a test error!');