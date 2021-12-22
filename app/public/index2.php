<?php 
require_once('db.php');

$db = new DB();


// Delete Todo
if(isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $db->deleteTodo($id);
}

// Mark as done
if(isset($_GET['done'])) {
  $id = $_GET['done'];
  $db->markTodo($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>u04-TODO-APP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Sora&display=swap" rel="stylesheet">

</head>
<body>

  <h1>Create</h1>
  <form action="create.php" method="POST">
    <input type="text" placeholder="Todo" name="todo">
    <input type="text" placeholder="User" name="user">
    <input type="submit" value="Create" name="createTodo">
  </form>


  <h1>Update</h1>
  <form action="update.php" method="POST">
    <input type="text" placeholder="id" name="id">
    <input type="text" placeholder="Todo" name="todo">
    <input type="submit" value="Update" name="updateTodo">
  </form>

  <h1>Todos</h1>
  <?php

  $todoList = $db->showTodo();

  foreach($todoList as $i) {
    echo $i['id'] . ". " . " " . $i['todo'] . " " . $i['user'] . "<a class='delete-btn' href='index2.php?delete={$i['id']}'><ion-icon name='close'></ion-icon></a>" . " " . "<a class='done-btn' href='index2.php?done={$i['id']}'><ion-icon name='refresh'></ion-icon></a>" . "<br>" . "<br>" . "<br>" . "<br>";
  }
  ?>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>

