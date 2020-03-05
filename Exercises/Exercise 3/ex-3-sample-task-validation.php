<?php
  $errors = array();
  $course_name = $lecturer = $description = $credits = "";

  function check_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }
   
  if (isset($_POST)) {
    $course_name_input = $_POST['course_name'];
    $lecturer_input = $_POST['lecturer'];
    $description_input = $_POST['description'];
    $credits_input = $_POST['credits'];

    if ($course_name_input && strlen($course_name_input) < 150) {
      $course_name = check_input($course_name_input);
    }
    else echo $errors['course_name'] = "<strong>Грешка: </strong>Името на курса е с максимална дължина 150 символа !<br>";

    if ($lecturer_input && strlen($lecturer_input) < 200) {
      $lecturer = check_input($lecturer_input);
    }
    else echo $errors['lecturer'] = "<strong>Грешка: </strong>Преподавателят на курса е с максимална дължина 200 символа !<br>";

    if ($description_input && strlen($description_input) > 10) {
      $description = check_input($description_input);
    }
    else echo $errors['description'] = "<strong>Грешка: </strong>Описанието на курса е с минимална дължина 10 символа !<br>";

    if ($credits_input > 0 || (empty($credits_input) && strlen($credits_input) == 0)) {
      $credits = check_input($credits_input);
    }
    else echo $errors['credits'] = "<strong>Грешка: </strong>Броят кредити на курса е цяло положително число !<br>";

    if (empty($errors)) { 
      echo "<h1>Успешно добавихте курс !</h1>";
    }
  }
?>