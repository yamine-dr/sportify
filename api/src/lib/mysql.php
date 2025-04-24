<?php

namespace App\Lib\MySQL;

class Server {
    // connection infos
    private string $host = "localhost";
    private string $login = "root";
    private string $password = '';
    // server connection
    private ?\PDO $connection;
    
    function __construct() {
        // initialise server connection
        $this->connection = new \PDO(
            "mysql:host={$this->host};charset=utf8",
            $this->login,
            $this->password,
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION] // to display errors
        );
    }

    public function dbExists(string $dbName): bool {
        $stmt = $this->connection->query("SHOW DATABASES LIKE '{$dbName}'");
        return ($stmt->fetch() !== false);
    }

    public function createDb(string $sqlFile): void {
        $statement = $this->connection->query(file_get_contents($sqlFile));
        if ($statement === false) {
            // database creation failed
            throw new Exception("Erreur : la base de donnée n'a pas pu être créée");
        }
    }

    // getters
    public function getHost(): string {
        return $this->host;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getConnection(): \PDO {
        return $this->connection;
    }
}

class Database {
    private ?\PDO $connection;

    function __construct($dbName) {
        $server = new Server();
        // initialise database connection
        $this->connection = new \PDO(
            "mysql:host={$server->getHost()};dbname={$dbName};charset=utf8",
            $server->getLogin(),
            $server->getPassword(),
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION] // to display errors
        );
    }

    public function getConnection(): \PDO {
        return $this->connection;
    }
}