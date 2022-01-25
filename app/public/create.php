<?php

require_once 'db.php';

// Create

if (isset($_POST['createTodo'])) {
    $todo = $_POST['todo'];
    $user = $_POST['user'];

    $db = new DB();
    $db->createTodo($todo, $user);
    header('Location: index2.php');
}
