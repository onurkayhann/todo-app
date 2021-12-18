<?php 
require_once('db.php');

$db = new DB();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>
<body>

  <form action="create.php" method="POST">
    <input type="text" placeholder="Todo" name="todo">
    <input type="text" placeholder="User" name="user">
    <input type="submit" value="Create" name="createTodo">
  </form>

  <?php
  $data = $db->showTodo();
  foreach($data as $i) {
    echo $i['todo'] . " - " . $i['user'] . "<br>";
  }
  ?>
    
</body>
</html>

