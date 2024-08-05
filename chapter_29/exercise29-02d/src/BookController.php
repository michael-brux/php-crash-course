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

    public function list(): void
    {
        $books = $this->bookRepository->findAll();

        $template = 'book/list.html.twig';
        $args = [
            'books' => $books
        ];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function deleteAll(): void
    {
        $books = $this->bookRepository->deleteAll();

        $this->list();
    }

    public function show(?int $id): void
    {
        $book = $this->bookRepository->find($id);

        $template = 'book/show.html.twig';
        $args = [
            'book' => $book
        ];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function delete(?int $id): void
    {
        $book = $this->bookRepository->delete($id);

        $this->list();
    }

}