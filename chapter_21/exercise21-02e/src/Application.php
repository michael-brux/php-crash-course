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
        $action = filter_input(INPUT_GET, 'action');

        switch ($action) {
            case 'privacy':
                $this->privacy();
                break;

            default:
                $name = filter_input(INPUT_GET, 'name');
                $this->hello($name);
        }
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

    private function privacy()
    {
        $template = 'privacy.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }
}