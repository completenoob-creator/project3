 <?php
include("./pagina's/connect_db.php");
include("./pagina's/functions.php");

$email = $_POST['email'];
$password = $_POST['login'];



$sql= "SELECT * FROM `register` WHERE `email` = '$email'";
// echo $sql;exit();

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

var_dump($row['email'] == $email);
var_dump($row['password']);
var_dump($password);

var_dump(password_verify($password, $row["password"]));

// exit();

if ($row['email'] == $email  && password_verify($password, $row["password"])){
    header("Location: ./index.php?content=message&alert=login-succesvol");
} else {
    header("Location: ./index.php?content=message&alert=login-error");
}

?>

