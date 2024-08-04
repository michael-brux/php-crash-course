<?php

namespace Mattsmithdev;

class Application
{
    public function run()
    {
        $name = filter_input(INPUT_GET, 'name');
        $this->hello($name);
    }

    private function hello(?string $name)
    {
        require_once __DIR__ . '/../templates/hello.php';
    }

}