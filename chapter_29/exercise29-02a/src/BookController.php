<?php

namespace Mattsmithdev;

class BookController extends Controller
{
    private BookRepository $bookRepository;

    public function __construct()
    {
        parent::__construct();
        $this->bookRepository = new BookRepository();
    }

    public function list()
    {
        $books = $this->bookRepository->findAll();

        $template = 'book/list.html.twig';
        $args = [
            'books' => $books
        ];
        $html = $this->twig->render($template, $args);
        print $html;
    }

}