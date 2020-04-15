<?php 
include("./pagina's/functions.php");
is_authorized(["admin", "root"])
?>


a-home
<?php
echo "mijn id is " . $_SESSION["id"];
echo "<hr>";
echo "mijn rol is " . $_SESSION["userrole"]
?>