<html>
<head>
<title>Formulier: verwijder klanten</title>
</head>

<body>
<H1> de blije hond - verwijderen klanten</H1>

<TABLE>
<FORM action='verwijder_klant_def.php' method='POST'>

<?php

include("connection.php");

// inlezen recordnummer in variabele;
$klantid = $_POST['verstopt'];

// tonen gegevens record
$query = "SELECT * FROM klant WHERE klantid = $klantid";

// Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
$resultaat = $dbVerbinding->query($query);

// De resultaten worden ingelezen in een array
while ($rij = $resultaat->fetch_array(MYSQLI_ASSOC))
{
echo"<TR><TD>klant-id: </TD><TD>$rij[klantid]</TD></TR>";
echo"<TR><TD>klant naam: </TD><TD>$rij[klantnaam]</TD></TR>";
echo"<TR><TD>klant adres: </TD><TD>$rij[klantadres]</TD></TR>";
echo"<TR><TD>klant postcode: </TD><TD>$rij[klantpostcode]</TD></TR>";
echo"<TR><TD>klant woonplaats: </TD><TD>$rij[klantwoonplaats]</TD></TR>";
echo"<TR><TD>klant email: </TD><TD>$rij[klantemail]</TD></TR>";
echo"<TR><TD>klant huisdier: </TD><TD>$rij[klanthuisdier]</TD></TR>";
echo "<TD><input type='hidden' name='klantid' value='$rij[klantid]'></TD>";

}
?>
</TABLE>

<input type ='submit' name='Verwijder' value='Verwijder'/>
<input type ='button' value='Terug' onClick="window.location.href='klant_overzicht.php'">
</FORM>


</body>
</html>