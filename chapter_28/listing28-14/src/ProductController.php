<?php

namespace Mattsmithdev;

class ProductController extends Controller
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        parent::__construct();
        $this->productRepository = new ProductRepository();
    }

    public function list(): void
    {
        $products = $this->productRepository->findAll();

        $template = 'product/list.html.twig';
        $args = [
            'products' => $products
        ];
        print $this->twig->render($template, $args);
    }

    public function show(int $id): void
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            $defaultController = new DefaultController();
            $defaultController->error(
              'error - no product found with id = ' . $id);
        } else {
            $template = 'product/show.html.twig';
            $args = [
                'product' => $product
            ];
            print $this->twig->render($template, $args);
        }
    }

}