<?php

namespace Mattsmithdev;

class Application
{
    public function run(): void {
        Logger::getInstance()->warning('I am a warning.');
        Logger::getInstance()->error('I am a test error!',
            ['exception' => new \Exception('example of exception object')]
        );
    }
}