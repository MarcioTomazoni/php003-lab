<?php

class Database {

    private $host = 'mysql';
    private $dbname = 'php003';
    private $user = 'root';
    private $pass = 'root';

    public function connect() {

        try {

            $pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->user,
                $this->pass
            );

            return $pdo;

        } catch (PDOException $e) {

            die("Erro DB: " . $e->getMessage());

        }
    }
}
