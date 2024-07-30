<?php

namespace Mattsmithdev;

class Application
{
    public function run(): void {
        print 'Hello, world!';
        Logger::debug('Hello, world! printed out');
        Logger::debug('another log message');
    }
}