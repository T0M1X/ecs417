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
$passw = hash('sha512',$_POST["pass"]);

while ($line = $deets->fetch_array()) {
  echo $user;
  echo $passw;
  echo "<p>---<p>";
  echo $line["email"];
  echo $line["password"];
  if($user == $line["email"] and $passw == $line["password"]){
    session_start();
    $_SESSION['person'] = $user;
    header("Location:index.php");
  }
}

//header("Location:login.html");
$mysql->close();
?>
