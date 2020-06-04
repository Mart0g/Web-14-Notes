<?php
  require_once "electives_db.php";

  $db = new ElectivesDB();
  $alter = $db->connection->prepare("ALTER TABLE `electives` ADD created_at timestamp DEFAULT CURRENT_TIMESTAMP");
  $alter->execute();
?>