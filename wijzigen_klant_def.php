<HTML>
<HEAD>
<TITLE>de blije hond</TITLE>
</HEAD>

<BODY>
<?php

include("connection.php");

if(isset($_POST["submit"]))
{
$klantid = $_POST["klantid"];
$klantnaam = $_POST["klantnaam"];
$klantadres = $_POST["klantadres"];
$klantpostcode = $_POST["klantpostcode"];
$klantwoonplaats = $_POST["klantwoonplaats"];
$klantemail = $_POST["klantemail"];
$klanthuisdier = $_POST["klanthuisdier"];

echo "U hebt de volgende gegevens gewijzigd: <br>";
echo "klant naam: $klantnaam <br>";
echo "klant adres: $klantadres <br>";
echo "klant postcode: $klantpostcode <br>";
echo "klant woonplaats: $klantwoonplaats<br>";
echo "klant email: $klantemail<br>";
echo "klant huisdier: $klanthuisdier<br>";

$query = "UPDATE `klant` SET klantnaam = '$klantnaam', klantadres = '$klantadres', klantpostcode = '$klantpostcode', klantwoonplaats = '$klantwoonplaats', klantemail = '$klantemail', klanthuisdier = '$klanthuisdier'
WHERE klantid = $klantid";

$resultaat = $dbVerbinding->query($query);



// sluiten database
$dbVerbinding->close();

}

?>

<p><input type ="button" value="Naar Overzicht" onClick="window.location.href='klant_overzicht.php'"></p>

</BODY>
</HTML>