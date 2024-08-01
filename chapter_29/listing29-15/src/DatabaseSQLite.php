<?php

namespace Mattsmithdev;

class DatabaseSQLite
{
    const DB_DIRECTORY = __DIR__ . '/../var';
    const DB_FILE_PATH = self::DB_DIRECTORY . '/demo1.db';
    const DATA_SOURCE_NAME = 'sqlite:' . self::DB_FILE_PATH;
    private ?\PDO $connection;

    public function getConnection(): ?\PDO
    {
        return $this->connection;
    }

    public function __construct()
    {
        try {
            $this->connection = new \PDO(self::DATA_SOURCE_NAME);
        } catch (\Exception $e) {
            print 'DatabaseSQLite::__construct() - Exception – ' . 'error trying to create database connection' . PHP_EOL;
        }
    }
}
