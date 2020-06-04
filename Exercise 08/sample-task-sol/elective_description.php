<?php
  require_once "electives_db.php";

  $db = new ElectivesDB();
  $selected = $_GET['id'];

  $select = $db->connection->prepare("SELECT * FROM `electives` WHERE id=".$selected);
  $select->execute();
  $result = $select->fetch(PDO::FETCH_ASSOC);
?>

<h2>Информация за предмета</h2>

<?php
  foreach ($result as $key => $value) {
    echo "<pre>".$key.": ".$value."</pre>";
  }
?>