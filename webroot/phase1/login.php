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

$query = "SELECT email, password FROM USERS";
$deets = $mysql->query($query);

$user = $_POST["mail"];
$passw = $_POST["pass"];

while ($line = $deets->fetch_array()) {
  echo $line["email"];
  echo $line["password"];
  echo "yo";
  echo $user;
  echo $passw;
  if($user == $line["email"] and $passw == $line["password"]){
    echo "found!!!!";
    header("Location:index.php");
  }
}

echo "not found :(";
$mysql->close();
?>
