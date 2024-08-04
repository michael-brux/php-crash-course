<?php

namespace Mattsmithdev;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Application
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';

    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
        $this->twig = new Environment($loader);
    }

    public function run()
    {
        $meals = [
            'breakfast' => 'toast',
            'lunch' => 'salad',
            'dinner' => 'fish and chips',
        ];

        $product1 = new Book();
        $product1->setDescription('bag of nails');
        $product1->setPrice(10.99);

        $template = 'demo.html.twig';
        $args = [
            'name' => 'matt',
            'meals' => $meals,
            'product' => $product1
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }
}

