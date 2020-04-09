<?php 
 //var_dump($_POST);
    include("./pagina's/connect_db.php");
    include("./pagina's/functions.php");

    $id = sanitize($_POST["id"]);
    $pwh = sanitize($_POST["pwh"]);
    $password = sanitize($_POST["password"]);
    $passwordcheck = sanitize($_POST["passwordcheck"]);

    if (empty($_POST["password"]) || empty($_POST["passwordcheck"]) ||empty($_POST["username"])) {
        header("Location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
    } elseif (strcmp($password, $passwordcheck)) {
        header("Location: ./index.php?content=message&alert=NoMatch-Password&id=$id&pwh=$pwh");
    } else {
        $sql = "SELECT * FROM register WHERE id = $id AND password = '$pwh'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            //updaten
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = "UPDATE register SET password = '$password_hash' WHERE id = $id and password = '$pwh'";
            mysqli_query($conn, $sql);
            echo $sql;exit();
        } else {
            //foutmelding
            header("Location: ./index.php?content=message&alert=no-id-pwh-match&id=$id&pwh=$pwh");
        }
    }
?>

