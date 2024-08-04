<?php

namespace Mattsmithdev;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class DefaultController extends Controller
{
    public function homepage(): void
    {
        $template = 'homepage.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function contactUs(): void
    {
        $template = 'contactUs.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function privacyPolicy(): void
    {
        $template = 'privacy.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }
}
