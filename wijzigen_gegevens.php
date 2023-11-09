<html>
<head>
<title>Formulier: wijzig klanten</title>
</head>

<body>

<?php
include ("connection.php");
$klantid = $_POST['verstopt'];

$query = "SELECT * FROM klant WHERE klantid = $klantid";
// Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
$resultaat = $dbVerbinding->query($query);

// De resultaten worden ingelezen
$rij = $resultaat->fetch_array(MYSQLI_ASSOC);

?>

<H1> de blije hond - wijzigen klant</H1>
<H3> Wijzig een klant : </H3>

<FORM action="wijzigen_klant_def.php" method="POST">
<table>
<tr><td>klant-id: </td>
<td><input name ="klantid" value="<?php echo "$rij[klantid]"; ?>" /></td></tr>
<tr><td>klant naam: </td>
<td><input name ="klantnaam" value="<?php echo "$rij[klantnaam]"; ?>" /></td></tr>
<tr><td>klant adres: </td>
<td><input name ="klantadres" value="<?php echo "$rij[klantadres]"; ?>" /></td></tr>
<tr><td>klant postcode: </td>
<td><input name ="klantpostcode" value="<?php echo "$rij[klantpostcode]"; ?>" /></td></tr>
<tr><td>klant woonplaats: </td>
<td><input name ="klantwoonplaats" value="<?php echo "$rij[klantwoonplaats]"; ?>"/></td></tr>
<tr><td>klant email : </td>
<td><input name ="klantemail" value="<?php echo "$rij[klantemail]"; ?>"/></td></tr>
<tr><td>klant huisdier : </td>
<td><input name ="klanthuisdier" value="<?php echo "$rij[klanthuisdier]"; ?>"/></td></tr>
<tr>
<td colspan="2" >
<input type ="submit" name="submit"/>
<input type ="button" value="naar overzicht" onClick="window.location.href='klant_overzicht.php'">
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