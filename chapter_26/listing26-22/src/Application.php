<?php

namespace Mattsmithdev;

class Application
{
    private Cacheable $cache;
    public function __construct(Cacheable $cache)
    {
        $this->cache = $cache;
        $this->cache->reset();
    }

    public function getCache(): Cacheable
    {
        return $this->cache;
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if (empty($id)) {
            $id = "(no id provided)";
        }

        // Cache ID from URL
        $this->cache->set('id', $id);
        $mainController = new MainController($this);

        switch ($action) {
            case 'about':
                $mainController->aboutUs();
                break;

            default: $mainController->homepage();
            
        }
    }
}