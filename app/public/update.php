<?php

require_once 'db.php';

if(isset($_POST['updateTodo'])) {
    $id = $_POST['id'];
    $todo = $_POST['todo'];

    $db = new DB();
    $db->updateTodo($id, $todo);
    header('Location: index2.php');
}