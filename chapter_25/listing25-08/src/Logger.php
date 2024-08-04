<?php

namespace Mattsmithdev;

use \vendor\monolog\monolog\src\Monolog\Logger as MonologLogger;
use \vendor\monolog\monolog\src\Monolog\Handler\StreamHandler;
abstract class Logger {
    const PATH_TO_LOG_FILE = __DIR__ . '/../logs/debug.log';

    public static function debug(string $message): void
    {
        $logger = new MonologLogger('channel1');
        $logger->pushHandler(new StreamHandler(self::PATH_TO_LOG_FILE));
        $logger->debug($message);
    }
}