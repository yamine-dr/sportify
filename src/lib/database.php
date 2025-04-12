<?php

namespace App\Lib\Database;

class Database {
    private ?\PDO $connection;

    function __construct() {
        // database connection infos
        $host = "localhost";
        $login = "root";
        $dbName = "sportify";
        $dbPassword = '';

        $this->connection = new \PDO(
            "mysql:host={$host};dbname={$dbName};charset=utf8",
            $login,
            $dbPassword,
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION] // to display errors
        );
    }

    public function getConnection() {
        return $this->connection;
    }
}