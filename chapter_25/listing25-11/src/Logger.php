<?php

namespace Mattsmithdev;

use Monolog\Logger as MonologLogger;
use Monolog\Handler\StreamHandler;

class Logger extends MonologLogger
{
    const PATH_TO_LOG_FILE = __DIR__ . '/../logs/debug.log';
    private static ?Logger $instance = NULL;

    private function __construct()
    {
        parent::__construct('channel1');
        $this->pushHandler(new StreamHandler(self::PATH_TO_LOG_FILE));
    }

    public static function getInstance(): Logger
    {
        if (self::$instance == NULL) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }
}