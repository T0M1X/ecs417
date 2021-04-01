<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");

// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$retrieve = "SELECT * FROM USERS";
$deets = $conn->query($retrieve);

$enteredUser = $_POST["email"];
$enteredPassword = $_POST["password"];

while ($line = $deets->fetch.assoc()){
  if($enteredUser == $line["email"] and $enteredPassword == $line["password"]){
    header("Location:homepage.html");
  }
}

$conn->close();
?>
