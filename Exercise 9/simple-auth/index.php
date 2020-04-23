<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
  </head>
  <body>
    <form method="post" action="./auth.php">
      <table>
        <tr>
          <th>Login</th>
        </tr>
        <tr>
          <td>
            <label>Username:</label>
            <input type="text" name="username" id="username" value="" autocomplete="off" />
          </td>
        </tr>
        <tr>
          <td><label>Password:</label>
            <input type="password" name="password" id="password" value="" autocomplete="off" /></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="login" id="login" value="Login" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>