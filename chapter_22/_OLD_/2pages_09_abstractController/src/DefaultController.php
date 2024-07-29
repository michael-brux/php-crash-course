<?php


namespace Mattsmithdev;

class DefaultController extends Controller
{
    public function homepage()
    {
        $template = 'homepage.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function contactDetails()
    {
        $template = 'contact.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

}