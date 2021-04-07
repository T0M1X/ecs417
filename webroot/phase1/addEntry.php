<?php
require_once "dbscon.php";

$title = $_POST["title"];
$message = $_POST["message"];
$today = date("y.m.d H:i:s");

session_start();

$usermail = $_SESSION['person'];

$query = "SELECT * FROM POSTS";
$posts = $mysql->query($query);
$num = $posts->num_rows + 1;

$sql = "INSERT INTO POSTS VALUES ($num,'$title','$message','$usermail','$today')";

if ($mysql->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "It failed!";
}

header("Location:blog.php");
exit();
$mysql->close();

?>
