<?php
  class ToDoList {
    public $connection;

    private $user = 'root';
    private $pass = '';
    private $dbname = 'todolist';

    public function __construct() {
      $this->connection = new PDO("mysql:host=localhost;dbname={$this->dbname}", $this->user, $this->pass);
      $this->connection->query("SET NAMES utf8");
    }
  }
?>