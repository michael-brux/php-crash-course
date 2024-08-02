<?php
do {
    $password = readline("enter new password (at least 6 characters): ");
} while (strlen($password) < 6);

print "password now set to '$password'";
