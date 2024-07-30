<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Suit;

$cases = Suit::cases();
$caseStrings = [];

foreach ($cases as $case) {
    $caseStrings[] = $case->value;
}

print implode($caseStrings);