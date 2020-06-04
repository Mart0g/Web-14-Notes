<?php
  session_start();
  if (isset($_SESSION['session_name']) && $_SESSION['session_name'] != "") {
    echo '<h3>Welcome '.$_SESSION['session_name'].'</h3>';
    echo '<h4><a href="logout.php">Logout</a></h4>';
  } else {
    header('location:index.php');
  }
?>