 <?php
include("./pagina's/connect_db.php");
include("./pagina's/functions.php");

$email = sanitize($_POST['email']);
$password = sanitize($_POST['login']);



$sql= "SELECT * FROM `register` WHERE `email` = '$email'";
// echo $sql;exit();

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

if ($row['email'] == $email  && password_verify($password, $row["password"])){
    header("Location: ./index.php?content=message&alert=login-succesvol");

    $_SESSION["id"] = $row["id"];
    $_SESSION["userrole"] = $row["userrole"];


  switch($row["userrole"]){
      case 'customer':
        header("Location: ./index.php?content=c-home");
      break;
      case 'moderator':
        header("Location: ./index.php?content=m-home");
      break;
      case 'admin':
        header("Location: ./index.php?content=a-home");
      break;
      case 'root':
        header("Location: ./index.php?content=r-home");
      break;
      case 'moderator':
        header("Location: ./index.php?content=home");
      break;
  }
    
} else {
    header("Location: ./index.php?content=message&alert=login-error");
}

?>

