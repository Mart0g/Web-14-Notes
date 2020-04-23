<?php
  $errors = array();
  $title = $lecturer = $description = "";

  require_once "help_functions.php";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "electives_db.php";

    $title_input = $_POST['title'];
    $lecturer_input = $_POST['lecturer'];
    $description_input = $_POST['description'];

    if (empty($title_input) || strlen($title_input) < 50) {
      $title = check_input($title_input);
    }
    else log_error('title', "Името на курса е с максимална дължина 50 символа !");

    if (empty($lecturer_input) || strlen($lecturer_input) < 50) {
      $lecturer = check_input($lecturer_input);
    }
    else log_error('lecturer', "Името на преподавателя на курса е с максимална дължина 50 символа !");

    if (empty($description_input) || strlen($description_input) > 10) {
      $description = check_input($description_input);
    }
    else log_error('description', "Описанието на курса е с минимална дължина 10 символа !");

    if (empty($errors)) {
      function update_field($field) {
        $db = new ElectivesDB();
        $selected = $_GET['id'];

        if (!empty($_POST[$field])) {
          $update = $db->connection->prepare("UPDATE `electives` SET ".$field."=:".$field." WHERE id=".$selected);
          $update->bindParam(':'.$field, $_POST[$field]);
          $update->execute();
        }
      }

      update_field('title');
      update_field('description');
      update_field('lecturer');

      echo "<h2>Успешно редактирахте курса!<h2>";
      header("Refresh:3; url=all_electives.php");
      exit;
    }
    else print_errors($errors);
  }
?>

<h1>Редактиране на избираем предмет:</h1>
<form method="POST">
  <label for="title">Ново име на предмета:</label><br>
  <input type="text" id="title" name="title" placeholder="Име на предмета" value="<?= $_POST['title'] ?? '' ?>" ><br>
  <label for="lecturer">Нов преподавател:</label><br>
  <input type="text" id="lecturer" name="lecturer" placeholder="Преподавател" value="<?= $_POST['lecturer'] ?? '' ?>"><br>
  <label for="description">Ново описание:</label><br>
  <textarea id="description" name="description" rows="5" cols="30" style="resize: none;" placeholder="Описание..."><?= $_POST['description'] ?? '' ?></textarea><br>
  <input type="submit" value="Редактиране">
  <input type="reset" value="Изчистване">
</form>