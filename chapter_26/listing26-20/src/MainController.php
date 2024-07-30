<?php

namespace Mattsmithdev;

class MainController
{
    private Application $application;
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function homepage()
    {
        require_once __DIR__ . '/../templates/homepage.php';
    }

    public function aboutUs()
    {
        $cache = $this->application->getCache();
        $id = $cache->get('id');

        require_once __DIR__ . '/../templates/aboutUs.php';
    }
}