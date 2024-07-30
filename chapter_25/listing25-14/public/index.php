<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Suit;
use Mattsmithdev\Card;

$card1 = new Card();
$card1->setSuit(Suit::SPADES);
$card1->setNumber(1);

print $card1;