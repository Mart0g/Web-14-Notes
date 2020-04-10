<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="to-do-styles.css">
  </head>
  <body class="container">
    <h1>To Do List</h1>
    <form method="post" action="to-do-add.php">
      <input type="text" name="name" placeholder="Do Web Homework...">
      <input type="submit" name="submit" value="Add Task">
    </form>
    <h2>All Tasks</h2>
    <table class="table table-striped">
      <th>Tasks</th>
      <tbody>
        <?php
          require_once "to-do-db.php";
          $db = new ToDoList();
          $select = $db->connection->query("SELECT * FROM todos ORDER BY id DESC");
          while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <tr>
            <td><?= $row['name'] ?></td>
            <td class="delete-form">
              <form method="POST" action="to-do-add.php">
                <button type="submit" name="delete">Delete Task</button>
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
              </form>
            </td>
          </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </body>
</html>