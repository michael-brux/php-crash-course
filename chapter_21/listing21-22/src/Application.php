<?php

namespace Mattsmithdev;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class Application
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';

    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
        $this->twig = new Environment($loader);
    }

    public function run(): void
    {
        $action = filter_input(INPUT_GET, 'action');
        switch ($action) {
            case  'contact':
                $this->contactUs();
                break;

            case 'home':
            default:
                $this->homepage();
        }
    }

    private function homepage(): void
    {
        $template = 'homepage.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    private function contactUs(): void
    {
        $template = 'contactUs.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

}
