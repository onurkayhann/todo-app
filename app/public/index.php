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

changeTodo(2, "ABCD");

?>