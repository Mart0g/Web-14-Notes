<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4 - Success</title>
  </head>
  <body>
    <?php
      /* yet again, "somefield" added only as a possible solution for task 2 */
      $username = $password = $somefield = "";

      function check_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        // $input = htmlspecialchars($input);
        return $input;
      }

      if (isset($_POST)) {
        $username = check_input($_POST['username']);
	    $password = check_input($_POST['password']);
        $somefield = check_input($_POST['somefield']);
      }

      /* If "somefield" is not added, the line below is good enough for task 1 */
      /* echo "<b>Entered username:</b> ".$username."<br>"."<b>Entered password:</b> ".$password; */
      echo "<b>After JSON encoding:</b> ".$somefield;
      $somefield = json_decode($somefield);
      echo "<br />"."<b>After JSON decoding:</b> ";
      var_dump($somefield);
    ?>
    <h2>You have successfully logged in!</h2>
    <a href="./ex-4-sol-login-form.php">Logout</a> <!-- for simulation purposes only -->
  </body>
</html>
