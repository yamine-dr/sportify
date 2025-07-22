<?php

namespace App\Lib\MySQL;

$env = parse_ini_file(".env");

class Server {
  // connection infos
  private string $host;
  private string $username;
  private string $password;
  private string $dbName;
  // server connection
  private ?\PDO $connection;
  
  function __construct() {
    global $env;
    // initialise connection infos
    $this->host = $env["HOST"];
    $this->username = $env["DB_USER_NAME"];
    $this->password = $env["DB_USER_PASS"];
    $this->dbName = $env["DB_NAME"];

    // initialise server connection
    $this->connection = new \PDO(
      "mysql:host={$this->host};charset=utf8",
      $this->username,
      $this->password,
      [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION] // to display errors
    );
  }

  // getters
  public function getHost(): string {
    return $this->host;
  }

  public function getUsername(): string {
    return $this->username;
  }

  public function getPassword(): string {
    return $this->password;
  }

  public function getDbName(): string {
    return $this->dbName;
  }

  public function getConnection(): \PDO {
    return $this->connection;
  }
}

class Database {
  private ?\PDO $connection;

  function __construct() {
    $server = new Server();
    // initialise database connection
    $this->connection = new \PDO(
      "mysql:host={$server->getHost()};dbname={$server->getDbName()};charset=utf8",
      $server->getUsername(),
      $server->getPassword(),
      [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION] // to display errors
    );
  }

  public function getConnection(): \PDO {
    return $this->connection;
  }
}