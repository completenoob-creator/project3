<?php
include("./pagina's/functions.php");
include("./pagina's/connect_db.php");

$id = $_GET["id"];

$sql = "SELECT * FROM `register` WHERE `id` = $id ";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);
?>

<form action="./index.php?content=a-update_script" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $record["email"] ?>">
  </div>
  <div class="form-group col-md-4">
      <label for="inputState">userrole</label>
      <select id="inputState" class="form-control" name="userrole" value="<?php echo $record["userrole"] ?>">
        <option selected>customer</option>
        <option value="2">admin</option>
        <option value="3">moderetor</option>
      </select>
    </div>
    <input type="hidden" value="<?php echo $id; ?>" name="id">
  <button type="submit" class="btn btn-primary">updaten</button>
</form>