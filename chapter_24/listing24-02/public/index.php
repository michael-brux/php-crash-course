<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logFile = __DIR__ . '/../logs/mylogs.log';

$demoLogger = new Logger('demo');
$demoLogger->pushHandler(new StreamHandler($logFile));

$securityLogger = $demoLogger->withName('security');

$demoLogger->error('I am a test error!');
$securityLogger->warning('invalid username entered');
