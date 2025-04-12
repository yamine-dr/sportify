<?php

namespace App\Models\Clients;

require_once("src/lib/database.php");

use App\Lib\Database\Database;

class ClientsRepository {
    private ?\PDO $dbConnection;

    function __construct() {
        $this->dbConnection = (new Database())->getConnection();
    }

    public function clientRegistration(string $firstname, string $lastname, string $mail, string $password): bool {
        $dbConnection = $this->dbConnection;

        // test if there's already a client registered with the $mail
        $statementGetMail = $dbConnection->prepare("SELECT COUNT(*) FROM clients_infos WHERE mail = :mail");
        $statementGetMail->execute(["mail" => $mail]);
        $isMailInDb = ($statementGetMail->fetchColumn() === 1);
        if ($isMailInDb) return false; // there's already a client with this mail -> registration failed

        // there isn't a client with that mail -> insert new client
        $statement1InsertClient = $dbConnection->prepare(
            "INSERT INTO clients_infos(firstname, lastname, mail) VALUES (:firstname, :lastname, :mail)"
        );
        $statement1InsertClient->execute([
            "firstname" => $firstname,
            "lastname" => $lastname,
            "mail" => $mail
        ]);
        
        $statement2InsertClient = $dbConnection->prepare(
            "INSERT INTO clients_credentials(id, mail, client_password) 
            VALUES (LAST_INSERT_ID(), :mail, :client_password)"
        );
        $statement2InsertClient->execute([
            "mail" => $mail,
            // hash password
            "client_password" => password_hash(htmlspecialchars($password), PASSWORD_DEFAULT)
        ]);
        // client insertion finished

        // get the id of the client
        $statementGetId = $dbConnection->prepare(
            "SELECT id FROM clients_credentials WHERE mail LIKE :mail"
        );
        $statementGetId->execute(["mail" => $mail]);
        $userId = (int) ($statementGetId->fetchColumn());
        
        // initialise the session
        $_SESSION["user"] = [
            "mail" => $mail,
            "password" => $password,
            "id" => $userId,
        ];
        return true; // registration succeeded
    }

    public function clientConnection(string $mail, string $password): bool {
        $dbConnection = $this->dbConnection;

        // test if there's a user that matches the $mail and $password in the database
        // 1) test the $mail
        $statementGetUser = $dbConnection->prepare(
            "SELECT mail, client_password FROM clients_credentials 
            WHERE mail = :mail"
        );
        $statementGetUser->execute(["mail" => $mail]);
        $row = $statementGetUser->fetch();
        if (!$row) return false; // there isn't a client with that mail -> connection failed
        
        // 2) there's a client with that mail, now test the $password
        if (password_verify($password, $row["client_password"])) {
            // it's the right password -> connect the client
            // get the id of the client
            $statementGetId = $dbConnection->prepare(
                "SELECT id FROM clients_credentials WHERE mail LIKE :mail"
            );
            $statementGetId->execute(["mail" => $mail]);
            $userId = (int) ($statementGetId->fetchColumn());
            
            // initialise the session
            $_SESSION["user"] = [
                "mail" => $mail,
                "password" => $password,
                "id" => $userId,
            ];            
            return true; // connection succeeded
        }
        return false; // password doesn't match -> connection failed
    }
}