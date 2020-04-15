<?php 
include("./functions.php");
is_authorized(["admin", "root", "moderator"])
?>
m-home
<?php
echo "mijn id is " . $_SESSION["id"];
echo "<hr>";
echo "mijn rol is " . $_SESSION["userrole"]
?>