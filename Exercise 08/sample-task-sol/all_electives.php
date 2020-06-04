<?php
  require_once "electives_db.php";

  $db = new ElectivesDB();
  $query = $db->connection->query("SELECT * FROM `electives`");
  $electives = array();

  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $electives[] = $row;
  }
?>

<h1>Избираеми предмети:</h1>

<?php
  if(count($electives) > 0) {
    echo "<ul>";
    foreach($electives as $elective) {
      $elective_title = "<li>".$elective['title'];
      $elective_description = "&emsp; [<i>"."<a href="."elective_description.php?id=".$elective['id'].">Информация за предмета</a>"."</i>]";
      $edit_elective = "&emsp; [<i>"."<a href="."edit_elective.php?id=".$elective['id'].">Редактирай предмета</a>"."</i>]</li>";
      echo $elective_title.$elective_description.$edit_elective;
    }
    echo "</ul>";
  }
  else echo "<p>Няма избираеми предмети !</p>";
?>

<a href="add_elective.php">Добави нов предмет</a>