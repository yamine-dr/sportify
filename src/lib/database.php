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

class Server {
    private ?\PDO $connection;

    public function __construct() {
        $host = "localhost";
        $login = "root";
        $dbPassword = '';

        // server connection
        $this->connection = new \PDO(
            "mysql:host={$host};charset=utf8",
            $login,
            $dbPassword,
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
        );
    }

    public function getConnection(): \PDO {
        return $this->connection;
    }
}