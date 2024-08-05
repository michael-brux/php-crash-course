<?php

namespace Tudublin;

class Application
{
    public function run()
    {
        // try to find action value from url-encoded variables ...
        $action = filter_input(INPUT_GET, 'action');

        // decide Response to create for user client ...
        switch ($action){
            case 'movies':
                $this->listMovies();
                break;

            case 'home':
            default:
                $this->index();
        }

    }

    public function index()
    {
        require __DIR__ . '/../templates/homepage.php';
    }

    public function listMovies()
    {
        $movieRepository = new BookRepository();
        // array 'movies' will be available for use by the PHP template (to loop through)
        $movies = $movieRepository->findAll();

        require __DIR__ . '/../templates/movies_list.php';
    }
}
