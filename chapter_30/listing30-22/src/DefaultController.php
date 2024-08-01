<?php

namespace Mattsmithdev;

class DefaultController extends Controller
{
    public function homepage(): void
    {
        $template = 'home.html.twig';
        $args = [];
        print $this->twig->render($template, $args);
    }

    public function error(string $message): void
    {
        $template = 'error.html.twig';
        $args = [
            'message' => $message
        ];
        print $this->twig->render($template, $args);
    }



}