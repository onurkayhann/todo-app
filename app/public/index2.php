<?php 
require_once('db.php');

$db = new DB();

// Delete Todo
// if(isset($_POST['deleteTodo'])) {
//   $id = $_POST['id'];
//   $db->deleteTodo($id);
// }

// Delete Todo
if(isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $db->deleteTodo($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

  <h1>Create</h1>
  <form action="create.php" method="POST">
    <input type="text" placeholder="Todo" name="todo">
    <input type="text" placeholder="User" name="user">
    <input type="submit" value="Create" name="createTodo">
  </form>

  <!-- <h1>Delete</h1>
  <form method="POST">
    <input type="text" placeholder="id" name="id">
    <input type="submit" value="Delete" name="deleteTodo">
  </form> -->

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
    echo $i['id'] . ". " . $i['todo'] . " - " . $i['user'] . " " . "<a class='delete-btn' href='index2.php?delete={$i['id']}'>Delete<ion-icon name='close'></ion-icon></a>" . "<br>";
  }

  ?>


<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>

