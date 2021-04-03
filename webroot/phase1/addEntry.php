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

$query = "SELECT * FROM POSTS";
$posts = $mysql->query($query);
$num = $posts->num_rows;

$title = $_POST["title"];
$message = $_POST["message"];
$today = date("y.m.d");

session_start();

echo $num;

$usermail = $_SESSION['person'];

$sql = "INSERT INTO POSTS VALUES ('$num','$title','$message','$usermail','$today')";

if ($mysql->query($sql) === TRUE) {
  echo "New record created successfully";
}

//header("Location:blog.php");
//exit();
$mysql->close();

?>
