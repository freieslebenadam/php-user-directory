<?php

class Database {
    private $host = "localhost";
    private $dbname = "user_directory";
    private $username = "root";
    private $password = "";

    protected function connect() {
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->query('SET NAMES utf8');

        return $pdo;
    }
}