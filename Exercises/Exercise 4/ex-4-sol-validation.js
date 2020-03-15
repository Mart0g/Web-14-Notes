/* Rough solution, can be easily re-written */
/* For example, try using arrow functions and let/const for defining variables */

var submit;

function isAlphaNumeric(input) {
  var pattern = new RegExp(/^[a-zA-Z0-9]+$/);
  return pattern.test(input);
}

function hasCapitalLetter(input) {
  var pattern = new RegExp(/^.*[A-Z].*/);
  return pattern.test(input);
}

function onErrorMessage(message) {
  var error = document.getElementById("onError");
  error.innerHTML += "<b>Error:</b> " + message + "<br/>";
  submit = false;
}

function clearPreviousErrors() {
  document.getElementById("onError").innerHTML = "";
}

function validate() {
  clearPreviousErrors();
  submit = true;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username.length < 3 || username.length > 10) {
    onErrorMessage("Username should be between 3 and 10 symbols long!");
  }
  if (password.length < 5) {
    onErrorMessage("Password should be at least 5 symbols long!");
  }
  if (!isAlphaNumeric(username)) {
    onErrorMessage("Username should be alphanumeric!");
  }
  if (!isAlphaNumeric(password)) {
    onErrorMessage("Password should be alphanumeric!");
  }
  if (!hasCapitalLetter(password)) {
    onErrorMessage("Password should have at least one capital letter!");
  }

  /* Parsing JSON without using AJAX - done by using a hidden input */
  var json =
    '{"username" : "' + username + '", ' + '"password" : "' + password + '"}';
  document.getElementById("somefield").value = json;
  /* End of rough solution - added only as an example */

  return submit;
}
