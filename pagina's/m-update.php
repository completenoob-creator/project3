<?php
include("./pagina's/functions.php");
include("./pagina's/connect_db.php");

$id = $_GET["id"];

$sql = "SELECT * FROM `register` WHERE `id` = $id ";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);
?>

<form action="./index.php?content=m-update_script" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $record["email"] ?>">
  </div>
</form>