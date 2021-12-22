<?php 

require_once ('db.php');


if(isset($_GET['done'])) {
    $id = $_GET['id'];

    $db = new DB();
    $db->markTodo($id);
    header('Location: index2.php');
}
