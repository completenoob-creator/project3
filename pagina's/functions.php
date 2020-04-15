<?php  
function sanitize($raw_data){
    global $conn;
    $data = htmlspecialchars($raw_data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
}

function is_authorized($userrols){

    if(!isset($_SESSION["id"])){
        return header("Location: ./index.php?content=message&alert=auht-error");
    }elseif(!in_array ($_SESSION["userrole"], $userrols)){
       return header("Location: ./index.php?content=message&alert=auht-error-user");
    }else{
        return true;
    }
   
}
?>