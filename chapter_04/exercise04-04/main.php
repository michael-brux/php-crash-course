<?php
$userNameCorrect = true;
//$userNameCorrect = false;

$passwordCorrect = true;

if($userNameCorrect and $passwordCorrect) {
    print 'You are now logged in';
} else {
    print 'Invalid credentials, please try again';
}