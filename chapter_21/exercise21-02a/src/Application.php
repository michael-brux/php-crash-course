<?php

namespace Mattsmithdev;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Application
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';
    private Environment $twig;

    public function __construct() {
        $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
        $this->twig = new Environment($loader);
    }
    public function run()
    {
        $name = filter_input(INPUT_GET, 'name');
        $this->hello($name);
    }

    private function hello(?string $name)
    {
        $template = 'hello.html.twig';
        $args = [
            'name' => $name,
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

}