<?php 

class DB {
    private $dbHost = "mysql";
    private $dbUser = "onur";
    private $dbPassword = "secret";
    private $dbname = "onurdb";
    private $connection;

    public function __construct() {
        try {
            $dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbname;
            $this->connection = new PDO($dsn, $this->dbUser, $this->dbPassword);
            
        } catch(PDOException $e) {
            die('Database failed: ' . $e->getMessage()); 
        }
    }

    public function createTodo($todo, $user) {
        $sql = "INSERT INTO myTodo (todo, user) VALUES (:todo, :user)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['todo' => $todo, 'user' => $user]);
        echo "todo created";
    }

    public function showTodo() {
        $sql = "SELECT * FROM myTodo";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}

?>