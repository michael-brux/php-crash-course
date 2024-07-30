<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Zwijn\Monolog\Handler\LogdnaHandler;

$INGESTION_KEY='your-MEZMO-ingestion-key-goes-here';

$generalLogger = new Logger('general');
$handler = new LogDnaHandler($INGESTION_KEY, 'host-mgw.com');
$generalLogger->pushHandler($handler);

$generalLogger->emergency('0 emergency');
$generalLogger->alert('1 alert');
$generalLogger->critical('2 critical');
$generalLogger->error('3 error');
$generalLogger->warning(' 4 warning');
$generalLogger->notice(' 5 notice');
$generalLogger->info('6 info');
$generalLogger->debug('7 debug');
$securityLogger = $generalLogger->withName('security');
$securityLogger->debug('7 debug - from security channel',['context-1' => 'some data']);