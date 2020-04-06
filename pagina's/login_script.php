<?php

include("./pagina's/connect_db.php");
include("./pagina's/functions.php");

$username = $_POST["username"];
$password = $_POST["password"];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password =mysql_real_escape_string($password);


$result = 

?>

