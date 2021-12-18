<?php

require_once 'db.php';

if(isset($_POST['updateTodo'])) {
    $id = $_POST['id'];
    $user = $_POST['user'];

    $db = new DB();
    $db->updateTodo($id, $user);
}