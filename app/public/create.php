<?php 

require_once 'index.php';

if(isset($_POST['changeTodo'])) {
    global $db;
    $todo = $_POST['todo'];
    $id = $_POST['id'];

    $query = 'UPDATE todoList SET todo = :todo WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue('id', $id);
    $statement->bindValue('todo', $newTodo);
    $statement->execute();
    $rows = $statement->rowCount();
    echo $rows;
}



?> 