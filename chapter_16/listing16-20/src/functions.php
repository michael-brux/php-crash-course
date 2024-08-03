<?php
function home(): void
{
    require_once __DIR__ . '/../templates/homepage.php';
}

function contact(): void
{
    require_once __DIR__ . '/../templates/contact.php';
}

function loginForm(): void
{
    require_once __DIR__ . '/../templates/login.php';
}

function secureBanking(): void
{
    require_once __DIR__ . '/../templates/secureBanking.php';
}

function showError($message): void
{
    require_once __DIR__ . '/../templates/error.php';
}

function getUsers(): array
{
    $users = [];
    $users['matt'] = 'smith';
    $users['james'] = 'bond';
    $users['jane'] = 'doe';

    return $users;
}

function processLogin(): void
{
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if (validLoginCredentials($username, $password)) {
        $_SESSION['username'] = $username;
        secureBanking();
    } else {
        showError('invalid login credentials - try again');
    }
}

function validLoginCredentials($username, $password): bool
{
    $users = getUsers();

    if (isset($users[$username])) {
        $storedPassword = $users[$username];
        if ($password == $storedPassword) {
            return true;
        }
    }

    // If we get here, no matching username/password
    return false;
}

function isLoggedIn(): bool
{
    if (isset($_SESSION['username'])) {
        return true;
    } else {
        return false;
    }
}

function logout(): void
{
    $_SESSION = [];
    home();
}

