<?php

namespace Mattsmithdev;

class MainController
{
    public function homepage()
    {
        require_once __DIR__ . '/../templates/homepage.php';
    }

    public function aboutUs()
    {
        $id = CacheStatic::get('id');
        require_once __DIR__ . '/../templates/aboutUs.php';
    }
}