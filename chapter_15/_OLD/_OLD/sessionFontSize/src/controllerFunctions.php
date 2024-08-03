<?php
function indexAction()
{
    $fontSize = getFontSize();
    $color = getBackgroundColor();
    require_once __DIR__ . '/../templates/index.php';
}

function getFontSize()
{
    // default to WHITE if not found in $_SESSION
    if (isset($_SESSION['fontSize'])){
        return $_SESSION['fontSize'];
    } else {
        return '1';
    }
}

function changeFontSize($color)
{
    $_SESSION['fontSize'] = $color;
    indexAction();
}

function getBackgroundColor()
{
    // default to WHITE if not found in $_SESSION
    if (isset($_SESSION['color'])){
        return $_SESSION['color'];
    } else {
        return 'white';
    }
}

function changeBackgroundColor($color)
{
    $_SESSION['color'] = $color;
    indexAction();
}


function resetSession()
{
    killSession();
    $fontSize = getFontSize();
    $color = getBackgroundColor();

    require_once __DIR__ . '/../templates/forgotton.php';
}

/**
 * advice on how to kill session from PHP.net
 * URL: http://php.net/manual/en/function.session-destroy.php
 */
function killSession()
{
    // (1) Unset all of the session variables.
    $_SESSION = [];

    // (2) If it is desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get('session.use_cookies')){
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
    }

    // (3) destroy the session.
    session_destroy();
}
