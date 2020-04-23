<?php
  session_start();
  include("db.php");

  if(isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username != "" && $password != "") {
      try {
        $query = "select * from users where username=:username and password=:password";
        $stmt = $db->prepare($query);
        $stmt->execute(
          array(
            'username' => $username,
            'password' => $password
          )
        );
        $count = $stmt->rowCount();
        $row   = $stmt->fetch(PDO::FETCH_ASSOC);

        if($count == 1 && !empty($row)) {
          $_SESSION['session_name'] = $row['username'];
          header('location:home.php');
        } else {
          header('location:index.php');
        }
      } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
      }
    } else {
      header('location:index.php');
    }
  }
?>