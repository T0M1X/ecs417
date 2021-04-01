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

$retrieve = "SELECT email, password FROM USERS";
$deets = $mysql->query($retrieve);

$enteredUser = $_POST["mail"];
$enteredPassword = $_POST["pass"];



$lines = $deets->num_rows;

while ($line = $deets->fetch_assoc()){
  if($enteredUser == $line["email"] and $enteredPassword == $line["password"]){
    echo "found!!!!";
    header("Location:index.php");
  }
}

$mysql->close();
?>
