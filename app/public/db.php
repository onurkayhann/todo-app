<?php 

class DB {
    private $dbHost = "mysql";
    private $dbUser = "onur";
    private $dbPassword = "secret";
    private $dbName = "onurdb";
    private $connection;

    public function __construct() {
        try {
            $dsn = "mysql:host=" . $this->dbHost . ";dbName=" . $this->dbName;
            $this->connection = new PDO($dsn, $this->dbUser, $this->dbPassword);
            echo "Database connected";
        } catch(PDOException $e) {
            die('Database failed: ' . $e->getMessage()); 
        }
    }
}

?>