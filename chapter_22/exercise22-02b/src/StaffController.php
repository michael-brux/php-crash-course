<?php

namespace Mattsmithdev;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class StaffController extends Controller
{
    public function list()
    {
        $staff1 = new Staff('Matt', 'Smith', 'matt.smith@tudublin.ie');
        $staff2 = new Staff('Sinead', 'Murphy', 'sinead.murphy@mgw.com');

        $staffObjects = [];
        $staffObjects[] = $staff1;
        $staffObjects[] = $staff2;

        $template = 'staff.html.twig';
        $args = [
            'staffObjects' => $staffObjects
        ];

        $html = $this->twig->render($template, $args);
        print $html;
    }
}

