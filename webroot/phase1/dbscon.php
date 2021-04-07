<?php
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");

  // Creates connection
  $mysql = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
  // Checks connection
  if ($mysql->connect_error) {
   die("Connection failed: " . $mysql->connect_error);
  }
?>
