<HTML>
<HEAD>
<TITLE>de blije hond</TITLE>
</HEAD>

<BODY>

<?php

include ("connection.php");
$klantid = $_POST['klantid'];
$query = "DELETE FROM klant WHERE klantid = $klantid";

$resultaat = $dbVerbinding->query($query);
echo "De klant is verwijderd<br>";
?>
<input type ="button" value="Naar Overzicht" onClick="window.location.href='klant_overzicht.php'">

</BODY>
</HTML>