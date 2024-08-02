<?php
$message = "go to the market and buy: ";
$numItems = 3;
for ($i = 1; $i <= $numItems; $i++) {
    $item = readline("type something to buy: ");
    $message .= "$item, ";
}

print $message;
