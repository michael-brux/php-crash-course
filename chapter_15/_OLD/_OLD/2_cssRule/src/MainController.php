<?php
namespace Itb;

class MainController
{
    public function indexAction()
    {
        $cssStyleRule = $this->buildStyleRule();
        require_once __DIR__ . '/../templates/index.php';
    }

    public function changeColor($color)
    {
        // (1) set default style array
        $styleArray = $this->getStyleArray();

        // (2) change color element to parameter
        $styleArray['color'] = $color;

        // store new style array into SESSION
        $_SESSION['styleArray'] = $styleArray;

        // redirect display page (with CSS style rule)
        $this->indexAction();
    }

    public function changeSize($size)
    {
        // (1) set default style array
        $styleArray = $this->getStyleArray();

        // (2) change color element to parameter
        $styleArray['size'] = $size;

        // store new style array into SESSION
        $_SESSION['styleArray'] = $styleArray;

        // redirect display page (with CSS style rule)
        $this->indexAction();
    }

    /**
     * build and return a CSS style role for font size / color based on
     * contents of SESSION ['styleArray'] property
     *
     * e.g.
     *  body {
     *      color: green;
     *      size: 1.2rem;
     *  }
     *
     * @return string
     */
    public function buildStyleRule()
    {
        // (1) get style array
        $styleArray = $this->getStyleArray();

        // (3) retrieve color and size from array
        $color = $styleArray['color'];
        $size = $styleArray['size'];

        // (4) build string to define CSS rule for all body text color
        $bodyRule = 'body {'
            . PHP_EOL . "    color: $color;"
            . PHP_EOL . "    font-size: {$size}rem;"
            . PHP_EOL . '}';

        return $bodyRule;
    }

    /**
     * if it exists, return $_SESSION['styleArray']
     * otherwise return a default style array
     * @return array
     */
    public function getStyleArray()
    {
        // (1) set default style array
        $styleArray = array();
        $styleArray['color'] = 'black';
        $styleArray['size'] = '1';

        // (2) try to retrieve style array from $_SESSION
        if (isset($_SESSION['styleArray'])){
            $styleArray = $_SESSION['styleArray'];
        }

        return $styleArray;
    }

    public function forgetSession()
    {
        $this->killSession();

        // redirect to display text
        $this->indexAction();
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

