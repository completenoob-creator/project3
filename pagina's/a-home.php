<?php 
include("./pagina's/functions.php");
include("./pagina's/connect_db.php");
is_authorized(["admin", "root"])
?>


a-home
<?php
echo "mijn id is " . $_SESSION["id"];
echo "<hr>";
echo "mijn rol is " . $_SESSION["userrole"];
echo "<hr>"
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
                <td><a href='index.php?content=a-update&id=". $record["id"] ."'><img src='./img/icon/b_edit.png'</td></a>
                </tr>";
};
if($record["userrole"] == "root"){
    echo "hoi";
}


?>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">userrole</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php 
      
      echo $records;
      
      ?>
    </tbody>
</table>