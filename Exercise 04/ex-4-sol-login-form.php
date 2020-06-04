<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4 - Login</title>
    <script type="text/javascript" src="ex-4-sol-validation.js"></script>
  </head>
  <body>
    <h1>Login</h1>
    <form method="POST" action="./ex-4-sol-validated-form.php" onsubmit="return validate();">
      <label for="username">Username: </label>
      <input id="username" type="text" name="username" placeholder="Username"><br>
      <label for="password">Password: </label>
      <input id="password" type="password" name="password" placeholder="Password"><br>
      <!-- Field below is not necessary - it's for an alternative solution -->
      <input id="somefield" type="hidden" name="somefield">
      <!-- Added only as an example how to use JSON and avoid having to deal with AJAX -->
      <input type="submit" value="Submit">
    </form><br />
    <span id="onError"></span>
  </body>
</html>