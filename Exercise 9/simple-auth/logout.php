<?php
  session_start();
  session_unset();
  session_destroy();
  if(empty($_SESSION['session_name'])) {
    header("location: index.php");
  }
?>