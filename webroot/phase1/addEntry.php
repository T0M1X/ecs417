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
$today = date("m.d.y");

session_start();


$sql = "INSERT INTO POSTS (ID,title,post,email,date) VALUES ($num,$title,$message,$_SESSION['person'],$today)";

if ($mysql->query($sql) === TRUE) {
  echo "New record created successfully";
}


header("Location:blog.php");
exit();
$mysql->close();

?>
