<?php

namespace Mattsmithdev;

use Monolog\Logger as MonologLogger;
use Monolog\Handler\StreamHandler;
abstract class Logger {
    const PATH_TO_LOG_FILE = __DIR__ . '/../logs/debug.log';

    public static function debug(string $message): void
    {
        $logger = new MonologLogger('channel1');
        $logger->pushHandler(new StreamHandler(self::PATH_TO_LOG_FILE));
        $logger->debug($message);
    }
}