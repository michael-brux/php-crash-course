<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

$immediateActionFile = __DIR__ . '/../logs/immediateActions.log';
$logFile = __DIR__ . '/../logs/infoActions.log';
$debugFile = __DIR__ . '/../logs/debug.log';

$handler1 = new StreamHandler($immediateActionFile, Level::Critical);
$handler2 = new StreamHandler($logFile, Level::Info, false);
$handler3 = new StreamHandler($debugFile);

$logger = new Logger('logger');
$logger->pushHandler($handler3);
$logger->pushHandler($handler2);
$logger->pushHandler($handler1);

$logger->emergency('0 emergency');
$logger->alert('1 alert');
$logger->critical('2 critical');
$logger->error('3 error');
$logger->warning(' 4 warning');
$logger->notice(' 5 notice');
$logger->info('6 info');
$logger->debug('7 debug');