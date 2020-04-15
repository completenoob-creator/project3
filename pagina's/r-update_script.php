<?php 
include("./pagina's/functions.php");
include("./pagina's/connect_db.php");

$id = $_POST["id"];
$email = $_POST["email"];
$userrole = $_POST["userrole"];


$sql = "UPDATE `register` 
SET `email` = '$email', `userrole` = '$userrole' WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./index.php?content=r-home");


?>