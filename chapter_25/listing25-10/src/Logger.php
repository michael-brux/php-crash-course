<?php

namespace Mattsmithdev;

use \vendor\monolog\monolog\src\Monolog\Logger as MonologLogger;
use \vendor\monolog\monolog\src\Monolog\Handler\StreamHandler;

class Logger  extends MonologLogger
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