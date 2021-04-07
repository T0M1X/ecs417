<?php
require_once "blog.php";
$query = "SELECT email, password FROM USERS";
$deets = $mysql->query($query);

$user = $_POST["mail"];
$passw = hash('sha512',$_POST["pass"]);
$found = 0;

while ($line = $deets->fetch_array()) {
  if($user == $line["email"] and $passw == $line["password"]){
    $found = $found + 1;
    session_start();
    $_SESSION['person'] = $user;
    header("Location:postblog.html");
    exit();
  }
}

if ($found == 0){
  header("Location:login.html");
  exit();
}
$mysql->close();
?>
