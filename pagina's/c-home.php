<?php 
include("./pagina's/functions.php");
is_authorized(["admin", "root", "moderator", "customer"])
?>
c-home
<?php
echo "Mijn id is " . $_SESSION["id"];
echo "<hr>";
echo "Mijn rol is " . $_SESSION["userrole"];
echo "<hr>";
echo "Ik kan echt helemaal niks op deze site behalve door de site heen gaan.";
?>

<?php 
