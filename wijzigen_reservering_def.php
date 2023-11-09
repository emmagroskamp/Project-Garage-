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
$reserveringsnummer = $_POST["reserveringsnummer"];
$productnaam = $_POST["productnaam"];
$categorie = $_POST["categorie"];
$reserveringsdatum = $_POST["reserveringsdatum"];
$prijs = $_POST["prijs"];
$betaald = $_POST["betaald"];

echo "U hebt de volgende gegevens gewijzigd: <br>";
echo "reserveringsnummer: $reserveringsnummer <br>";
echo "product naam: $productnaam <br>";
echo "categorie: $categorie <br>";
echo "reserveringsdatum: $reserveringsdatum<br>";
echo "prijs: $prijs<br>";
echo "betaald: $betaald<br>";

$query = "UPDATE `reservering` SET reserveringsnummer = $reserveringsnummer, productnaam = '$productnaam', categorie = '$categorie', reserveringsdatum = '$reserveringsdatum', prijs = $prijs, betaald = '$betaald'
WHERE reserveringsnummer = $reserveringsnummer";

$resultaat = $dbVerbinding->query($query);



// sluiten database
$dbVerbinding->close();

}

?>

<p><input type ="button" value="Naar overzicht" onClick="window.location.href='klant_overzicht.php'"></p>

</BODY>
</HTML>