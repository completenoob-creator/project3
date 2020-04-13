 <?php
include("./pagina's/connect_db.php");
include("./pagina's/functions.php");

$email = $_POST['email'];
$password = $_POST['login'];


$sql= "SELECT * FROM register WHERE `email` = '$email' AND `password` = '$password'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
if ($row['email'] ==$email  && $row['password'] == $password){
    header("Location: ./index.php?content=message&alert=login-succesvol");
} else {
    header("Location: ./index.php?content=message&alert=login-error");
}

?>

