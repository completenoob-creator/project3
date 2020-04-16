<?php 
include("./pagina's/functions.php");
include("./pagina's/connect_db.php");


$id = $_GET["id"];

$sql = "DELETE FROM `register` WHERE `id` = $id";

mysqli_query($conn, $sql);

header("Location: ./index.php?content=message&alert=succes_vol");

?>