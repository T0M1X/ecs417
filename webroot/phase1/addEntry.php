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

$mysql->query("INSERT INTO POSTS ($num,$title,$message,$_SESSION['person'],$today)");
header("Location:blog.php");
exit();
$mysql->close();

?>
