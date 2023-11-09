<html>
<head>
<title>Formulier: verwijder reservering</title>
</head>

<body>
<H1> de blije hond - verwijderen reservering</H1>

<TABLE>
<FORM action='verwijderen_reservering_def.php' method='POST'>

<?php

include("connection.php");

// inlezen recordnummer in variabele;
$klantid = $_POST['verstopt'];

// tonen gegevens record
$query = "SELECT * FROM reservering WHERE klantid = $klantid";

// Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
$resultaat = $dbVerbinding->query($query);

// De resultaten worden ingelezen in een array
while ($rij = $resultaat->fetch_array(MYSQLI_ASSOC))
{
echo"<TR><TD>klant-id: </TD><TD>$rij[klantid]</TD></TR>";
echo"<TR><TD>reserveringsnummer: </TD><TD>$rij[reserveringsnummer]</TD></TR>";
echo"<TR><TD>productnaam: </TD><TD>$rij[productnaam]</TD></TR>";
echo"<TR><TD>categorie: </TD><TD>$rij[categorie]</TD></TR>";
echo"<TR><TD>reserveringsdatum: </TD><TD>$rij[reserveringsdatum]</TD></TR>";
echo"<TR><TD>prijs: </TD><TD>$rij[prijs]</TD></TR>";
echo"<TR><TD>betaald: </TD><TD>$rij[betaald]</TD></TR>";
echo "<TD><input type='hidden' name='klantid' value='$rij[klantid]'></TD>";

}
?>
</TABLE>

<input type ='submit' name='Verwijder' value='Verwijder'/>
<input type ='button' value='Terug' onClick="window.location.href='klant_overzicht.php'">
</FORM>


</body>
</html>