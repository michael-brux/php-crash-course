<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Movie;
use Tudublin\BookRepository;

$movieRepository = new BookRepository();

$movieRepository->resetTable();

// use handy method added to MovieRepository to create and insert object
$movieRepository->createAndInsert('Jaws', 9.99, 'horror');
$movieRepository->createAndInsert('Jumanji', 7, 'entertainment');

// add new object without using createAndInsert(..,.)
$jaws2 = new Movie();
$jaws2->setTitle('Jaws2');
$jaws2->setPrice(5.99);
$jaws2->setCategory('horror');
$movieRepository->insert($jaws2);

$movies = $movieRepository->findAll();
print '<pre>';
var_dump($movies);
