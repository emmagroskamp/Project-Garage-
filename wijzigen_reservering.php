<html>
<head>
<title>Formulier: wijzig reservering</title>
</head>

<body>

<?php
include ("connection.php");
$klantid = $_POST['verstopt'];

$query = "SELECT * FROM `reservering` WHERE klantid = $klantid";
// Voer query uit in de database. Gebruik de verbinding zoals die in connection.php staat
$resultaat = $dbVerbinding->query($query);

// De resultaten worden ingelezen
$rij = $resultaat->fetch_array(MYSQLI_ASSOC);

?>

<H1> de blije hond - wijzigen reservering</H1>
<H3> Wijzig een reservering : </H3>

<FORM action="wijzigen_reservering_def.php" method="POST">
<table>
<tr><td>reserveringsnummer: </td>
<td><input name ="reserveringsnummer" value="<?php echo "$rij[reserveringsnummer]"; ?>" /></td></tr>
<tr><td>product naam: </td>
<td><input name ="productnaam" value="<?php echo "$rij[productnaam]"; ?>" /></td></tr>
<tr><td>categorie: </td>
<td><input name ="categorie" value="<?php echo "$rij[categorie]"; ?>" /></td></tr>
<tr><td>reserveringsdatum: </td>
<td><input name ="reserveringsdatum" value="<?php echo "$rij[reserveringsdatum]"; ?>"/></td></tr>
<tr><td>prijs: </td>
<td><input name ="prijs" value="<?php echo "$rij[prijs]"; ?>"/></td></tr>
<tr><td>betaald: </td>
<td><input name ="betaald" value="<?php echo "$rij[betaald]"; ?>"/></td></tr>
<tr>
<td colspan="2" >
<input type ="submit" name="submit"/>
<input type ="button" value="Naar overzicht" onClick="window.location.href='klant_overzicht.php'">
</td>
</tr>
</table>
</FORM>

</body>
</html>
<?php

// sluiten database
$dbVerbinding->close();
?>