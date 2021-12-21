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
        // echo "todo created";
    }

    public function showTodo() {
        $sql = "SELECT * FROM myTodo";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $todoList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $todoList;
    }

    public function deleteTodo($id) {
        $sql = "DELETE FROM myTodo WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['id' => $id]);
        echo "Todo: " . $id . " is deleted";
    }

    public function updateTodo($id, $todo) {
        $sql = "UPDATE myTodo SET todo = :todo WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['id' => $id, 'todo' => $todo]);
        //echo "Todo: " . $id . " is updated";
    }

    public function markTodo($id) {
        $sql = "UPDATE myTodo SET done = :done WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['done' => 1, 'id' => $id]);
    }
}

?>