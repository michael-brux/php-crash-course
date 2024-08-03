<?php

while (true) {
    $userText = readline('please enter a number: ');

    if(is_numeric($userText)){
        break;
    }
}

print "well done !";
