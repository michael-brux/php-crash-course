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
            case  'privacy':
                $this->privacy();
                break;

            case  'staffList':
                $this->staffList();
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

    private function staffList(): void
    {
        $staff1 = new Staff('Matt Smith', 'CTO');
        $staff2 = new Staff('Sinead Murphy', 'CEO');

        $staffObjects = [];
        $staffObjects[] = $staff1;
        $staffObjects[] = $staff2;

        $template = 'staffList.html.twig';
        $args = [
            'staffObjects' => $staffObjects
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    private function privacy(): void
    {
        $template = 'privacy.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

}
