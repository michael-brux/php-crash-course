<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logFile = __DIR__ . '/../logs/mylogs.log';

$demoLogger = new Logger('exercise24-02');
$demoLogger->pushHandler(new StreamHandler($logFile));

$demoLogger->error('I am a test error!');
$demoLogger->warning('invalid username entered');
