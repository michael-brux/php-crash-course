<?php

namespace Mattsmithdev;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class ProductController
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';

    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
        $this->twig = new Environment($loader);
    }

    public function productList()
    {
        $product1 = new Product('Hammer', 9.99);
        $product2 = new Product('Bag of nails', 6.00);
        $product3 = new Product('Bucket', 2.00);
        $products = [$product1, $product2, $product3];

        $template = 'productList.html.twig';
        $args = [
            'products' => $products
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }
}

