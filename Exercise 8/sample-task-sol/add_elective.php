<?php
  $errors = array();
  $title = $lecturer = $description = "";

  require_once "help_functions.php";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "electives_db.php";

    $title_input = $_POST['title'];
    $lecturer_input = $_POST['lecturer'];
    $description_input = $_POST['description'];

    if ($title_input && strlen($title_input) < 50) {
      $title = check_input($title_input);
    }
    else log_error('title', "Името на курса е с максимална дължина 50 символа !");

    if ($lecturer_input && strlen($lecturer_input) < 50) {
      $lecturer = check_input($lecturer_input);
    }
    else log_error('lecturer', "Името на преподавателя на курса е с максимална дължина 50 символа !");

    if ($description_input && strlen($description_input) > 10) {
      $description = check_input($description_input);
    }
    else log_error('description', "Описанието на курса е с минимална дължина 10 символа !");

    if (empty($errors)) {
      $db = new ElectivesDB();

      $insert = $db->connection->prepare("INSERT INTO `electives` (title, description, lecturer) VALUES (:title, :description, :lecturer)");
      $insert->bindParam(':title', $_POST['title']);
      $insert->bindParam(':description', $_POST['description']);
      $insert->bindParam(':lecturer', $_POST['lecturer']);
      $insert->execute();

      require_once "date_created.php";

      echo "<h2>Успешно добавихте курса!<h2>";
      header("Refresh:3; url=all_electives.php");
      exit;
    }
    else print_errors($errors);
  }
?>

<h1>Добавяне на избираем предмет:</h1>
<form method="POST">
  <label for="title">Име на предмета:</label><br>
  <input type="text" id="title" name="title" placeholder="Име на предмета" value="<?= $_POST['title'] ?? '' ?>" required><br>
  <label for="lecturer">Преподавател:</label><br>
  <input type="text" id="lecturer" name="lecturer" placeholder="Преподавател" value="<?= $_POST['lecturer'] ?? '' ?>" required><br>
  <label for="description">Описание:</label><br>
  <textarea id="description" name="description" rows="5" cols="30" style="resize: none" placeholder="Описание..." required><?= $_POST['description'] ?? '' ?></textarea><br>
  <input type="submit" value="Изпращане">
  <input type="reset" value="Изчистване">
</form>

<a href="all_electives.php">Виж всички предмети</a>