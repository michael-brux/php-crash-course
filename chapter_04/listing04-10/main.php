<?php
$password = '1234';
$passwordContainsPassword = str_contains($password, 'password');
$passwordTooShort = (strlen($password) < 6);

if ($passwordContainsPassword || $passwordTooShort ) {
    print 'Your password does not meet minimal security requirements.';
}
