

<?php
$db = new PDO('mysql:host=mysql;dbname=onurdb', 'onur', 'secret');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function showTodo() {
    global $db;
    $rows = $db->query('SELECT * FROM todoList ORDER BY todo');

    foreach ($rows as $row) {
        var_dump($row);
    }
}

showTodo();

// Updating/changing one specific todo
function changeTodo(int $id, string $newTodo):void {
    global $db;
    $query = 'UPDATE todoList SET todo = :todo WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue('id', $id);
    $statement->bindValue('todo', $newTodo);
    $statement->execute();
    $rows = $statement->rowCount();
    echo $rows;
}

// Deleting from Todo
function deleteTodo(int $id):void {
    global $db;
    $query = 'DELETE FROM todoList WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue('id', $id);
    $statement->execute();
    $rows = $statement->rowCount();
    echo $rows;
} 

deleteTodo(3);

// Function for adding a Todo
$query = <<<SQL
INSERT INTO todoList (todo, user)
VALUES ("I went to muay thai today", "Onur")
SQL;
$result = $db->exec($query);
var_dump($result);

// Another type for adding a Todo
$query = <<<SQL
INSERT INTO todoList (todo, user)
VALUES (:todo, :user)
SQL;
$statement = $db->prepare($query);
$params = [
    'todo' => 'Read more books',
    'user' => 'Jax Teller'
];
$statement->execute($params);
echo $db->lastInsertId();


?>