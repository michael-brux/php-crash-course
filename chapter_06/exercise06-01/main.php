<?php

do {
    $userText = readline("enter a word begining with a capital letter: ");
} while ($userText != ucfirst($userText));

print "well done !";
