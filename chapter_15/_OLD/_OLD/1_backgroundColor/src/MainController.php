<?php
namespace Itb;

class MainController
{
    public function getBackgroundColor()
    {
        // default to WHITE if not found in $_SESSION
        if (isset($_SESSION['backgroundColor'])){
            return $_SESSION['backgroundColor'];
        } else {
            return 'white';
        }
    }

    public function aboutAction()
    {
        $backgroundColor = $this->getBackgroundColor();
        require_once __DIR__ . '/../templates/about.php';
    }

    public function indexAction()
    {
        $backgroundColor = $this->getBackgroundColor();
        require_once __DIR__ . '/../templates/index.php';
    }

    public function changeBackgroundColor($color)
    {
        $_SESSION['backgroundColor'] = $color;
        $this->indexAction();
    }

    public function forgetSession()
    {
        $this->killSession();

        print 'SESSION has been destroyed - all session data deleted';
        print '<p><a href="/">back to home page</a>';
    }

    /**
     * advice on how to kill session from PHP.net
     * URL: http://php.net/manual/en/function.session-destroy.php
     */
    public function killSession()
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

}