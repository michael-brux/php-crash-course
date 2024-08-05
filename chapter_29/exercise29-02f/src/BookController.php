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

    public function create(): void
    {
        $template = 'book/create.html.twig';
        $args = [        ];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function processCreate(string $author, string $title, float $price): void
    {
        $this->bookRepository->insert($author, $title, $price);
        $this->list();
    }

    public function edit(int $id): void
    {
        $book = $this->bookRepository->find($id);

        $template = 'book/edit.html.twig';
        $args = [
            'book' => $book
        ];
        print $this->twig->render($template, $args);
    }

    public function processEdit(int $id, string $author, string $title, float $price): void
    {
        $this->bookRepository->update($id, $author, $title, $price);
        $this->list();
    }

}