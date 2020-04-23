<?php
  function check_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }

  function log_error($field, $message) {
    global $errors;
    $errors[$field] = $message;
  }

  function print_errors($fields) {
    foreach($fields as $field => $message) {
      echo "<b><span style=\"color: red\">Грешка: </span>$message</b><br />";
    }
  }
?>