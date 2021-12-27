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
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Sora&display=swap" rel="stylesheet">

</head>
<body>

<!-- Form for Create -->

  <h1>Create</h1>
  <form action="create.php" method="POST">
    <input type="text" placeholder="Todo" name="todo">
    <input type="text" placeholder="User" name="user">
    <input type="submit" value="Create" name="createTodo">
  </form>

  <!-- Form for Update -->

  <h1>Update</h1>
  <form action="update.php" method="POST">
    <input type="text" placeholder="id" name="id">
    <input type="text" placeholder="Todo" name="todo">
    <input type="submit" value="Update" name="updateTodo">
  </form>

  <!-- Where Todos land dynamically -->

  <h1>Todos</h1>
  <?php $todoList = $db->showTodo(); ?>

  <!-- Foreach loop to dynamically make echo id, todo, and user -->

  <?php foreach($todoList as $i): ?>
  <p class="item<?php echo $i['done'] ? ' done' : ' '?>">
  <?php echo $i['id']?>.
  <?php echo $i['todo']?> -
  <?php echo $i['user']?>
  </p>
  <a class='delete-btn' href='index2.php?delete=<?php echo $i['id']?>'><ion-icon name='close'></ion-icon></a>
  <a class='done-btn' href='index2.php?done=<?php echo $i['id']?>'><ion-icon name='checkmark'></ion-icon></a>
  <br>
  <br>
  <?php endforeach; ?>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>