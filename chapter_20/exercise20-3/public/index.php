<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\FakerSmallEnglish\Factory;
$faker = Factory::create();

for ($i = 1; $i <= 10; $i++) {
    print $faker->name() . "\n";
}

