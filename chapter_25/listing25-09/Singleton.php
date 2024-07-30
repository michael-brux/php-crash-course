<?php

class Singleton
{
    private static ?Singleton $instance = NULL;

    private function __construct()
    {
        // -- Do the resource expensive work here --
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance == NULL) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}