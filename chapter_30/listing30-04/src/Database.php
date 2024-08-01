<?php

namespace Mattsmithdev;

class Database
{
    const MYSQL_HOST = 'localhost';
    const MYSQL_PORT = '3306';
    const MYSQL_USER = 'root';
    const MYSQL_PASSWORD = 'passpass';
    const MYSQL_DATABASE = 'demo1';
    const DATA_SOURCE_NAME = 'mysql:dbname=' . self::MYSQL_DATABASE . ';host=' . self::MYSQL_HOST . ':' . self::MYSQL_PORT;
    private ?\PDO $connection;

    public function getConnection(): ?\PDO
    {
        return $this->connection;
    }

    public function __construct()
    {
        try{
            $connection = new \PDO(
                self::DATA_SOURCE_NAME,
                self::MYSQL_USER,
                self::MYSQL_PASSWORD
            );
            $this->connection = $connection;
        } catch (\Exception $e) {
            print "Database::__construct() - Exception '
                . '- error trying to create database connection";
        }
    }
}
