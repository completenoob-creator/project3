<?php 
include("./functions.php");
is_authorized(["root"])
?>
r-home
<?php
echo "mijn id is " . $_SESSION["id"];
echo "<hr>";
echo "mijn rol is " . $_SESSION["userrole"]
?>