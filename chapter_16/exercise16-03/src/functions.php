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

function secureMaths(): void
{
    require_once __DIR__ . '/../templates/secureMaths.php';
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
    $users['fred'] = 'flintstone';
    $users['teddy'] = 'cuddly';

    return $users;
}

function getBankers(): array
{
    $bankers = [];
    $bankers['banker1'] = 'rich';
    $bankers['banker2'] = 'veryrich';

    return $bankers;
}

function processLogin(): void
{
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if (validUSERLoginCredentials($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'USER';
        secureBanking();
    } elseif (validBANKERLoginCredentials($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'BANKER';
        secureBanking();
    } else {
        showError('invalid login credentials - try again');
    }
}

function validUSERLoginCredentials($username, $password): bool
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

function validBANKERLoginCredentials($username, $password): bool
{
    $bankers = getBankers();

    if (isset($bankers[$username])) {
        $storedPassword = $bankers[$username];
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

function usernameFromSession(): string
{
    if (isset($_SESSION['username']))
        return $_SESSION['username'];
    else
        return '';
}

function getRoleFromSession(): string
{
    if (isset($_SESSION['role']))
        return $_SESSION['role'];
    else
        return '';
}

function isLoggedInBanker(): bool
{
    if(getRoleFromSession() == 'BANKER'){
        return true;
    }

    return false;
}
