<?php 

require_once ('db.php');


if(isset($_GET['markTodo'])) {
    $as = $_GET['as'];
    $id = $_GET['id'];

    $db = new DB();
    $db->markTodo($as, $id)
}

header('location: index2.php');
