<?php
include_once 'databaseconfig.php';

class Database {

    private $pdo;

    private $statement;
    private $dbHandler;
    private $error;

    private function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}