<?php

class QuantumzDb {

    private $dbName = "quantumzDb";
    private $host = "127.0.0.1";
    private $userName = "root";
    private $password = "";

    protected function QuantumzDbConnection() {
        try {
            $quantumzDb = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->userName, $this->password);
            return $quantumzDb;
        } catch (Exception $ex) {
            die('Error : ' . $ex->getMessage());
        }
    }
}
