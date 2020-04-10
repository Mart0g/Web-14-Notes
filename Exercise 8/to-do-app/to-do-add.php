<?php
  require_once "to-do-util.php";
  require_once "to-do-db.php";
  $db = new ToDoList();

  if (isset($_POST['submit'])) {
    $name_input = $_POST['name'] ?? '';
    $name = check_input($name_input);
    $insert = $db->connection->prepare("INSERT INTO todos (name) VALUES (:name)");
    $insert->bindParam(':name', $name, PDO::PARAM_STR);
    // $name = $name.' - In Progress';
    $insert->execute();
  } elseif (isset($_POST['delete']))
  {
    $id = $_POST['id'];
    $delete = $db->connection->prepare("DELETE FROM todos WHERE id = :id");
    // $delete->bindValue(':id', $id, PDO::PARAM_INT);
    // $delete->execute();
    $delete->execute(array(':id' => $id));
  }

  header("Location: index.php");
?>