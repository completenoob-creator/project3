<?php 
include("./pagina's/functions.php");
include("./pagina's/connect_db.php");
is_authorized(["root"])
?>
r-home
<?php
echo "mijn id is " . $_SESSION["id"];
echo "<hr>";
echo "mijn rol is " . $_SESSION["userrole"]
?>

<?php 
$sql = "SELECT * FROM `register`";

$result = mysqli_query($conn, $sql);


$records = "";
while ($record = mysqli_fetch_assoc($result)){
    $records .= 
                "<tr><th scope='row'>" . $record["id"] . 
                "</th><td> " . $record["email"] . 
                "</td><td> " . $record["password"] . 
                "</td><td> " . $record["userrole"] . "</td>
                <td><a href='index.php?content=r-update&id=". $record["id"] ."'><img src='./img/icon/b_edit.png'</a></td>
                <td><a href='index.php?content=r-drop&id=". $record["id"] ."'><img src='./img/icon/b_drop.png'</a></td>
                </tr>";
};

?>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">userrole</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php 
      
      echo $records;
      
      ?>
    </tbody>
</table>