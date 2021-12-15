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

?>