<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercise 2 - Bonus Task 3</title>
  </head>
  <body>
    <?php
      class Request {
        protected $method;
        protected $path;
        protected $url;
        protected $user_agent;

        public function __construct() {
          // for returning the string in lowercase only
          $this->method = strtolower($_SERVER['REQUEST_METHOD']);
          // can be done with PHP_SELF as well, but it doesn't display the query string parameters in case there are such
          $this->path = $_SERVER['REQUEST_URI'];
          // can be done with SERVER_NAME as well, but it doesn't display the port if it's different than the default one
          $this->url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
          $this->user_agent = $_SERVER['HTTP_USER_AGENT'];
        }

        public function getMethod() {
          return $this->method;
        }
        public function getPath() {
          return $this->path;
        }
        public function getURL() {
          return $this->url;
        }
        public function getUserAgent() {
          return $this->user_agent;
        }
      }

      class GetRequest extends Request {
        protected $query_string;

        public function __construct() {
          parent::__construct();
          $this->query_string = $_SERVER['QUERY_STRING'];
        }

        public function getData() {
          // for converting the query string parameters into an array
          parse_str($this->query_string, $result);
          // for converting the array into a JSON object
          return json_encode($result);
        }
      }

      $request = new GetRequest();

      echo "<b>Method: </b>".$request->getMethod();
      echo "<br>";
      echo "<b>Path: </b>".$request->getPath();
      echo "<br>";
      echo "<b>URL: </b>".$request->getURL();
      echo "<br>";
      echo "<b>User Agent: </b>".$request->getUserAgent();
      echo "<br>";
      echo "<b>JSON: </b>".$request->getData();
    ?>
  </body>
</html>