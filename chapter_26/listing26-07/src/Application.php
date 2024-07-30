<?php

namespace Mattsmithdev;

class Application
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if (empty($id)) {
            $id = "(no id provided)";
        }
        // Cache ID from URL
        CacheStatic::set('id', $id);
        $mainController = new MainController();

        switch ($action) {
            case 'about':
                $mainController->aboutUs();
                break;

            default: $mainController->homepage();

        }
    }
}