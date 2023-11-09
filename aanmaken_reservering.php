<html>
    <head><title>Nieuwe klant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="deblijehond.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="left">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="klant_aanmaken.php"> De blije hond</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="homepagina.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="klant_aanmaken.php">Nieuwe klant<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="klant_overzicht.php">Klant overzicht</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="overzicht_product.php">Overzicht producten</a>
            </li>
        </ul>
    </nav>
    </div>
    <!--Code voor de navigatiebalk bovenin de webpagina.-->

    <div class="main">
    <H1> De blije hond - Nieuwe reservering</H1>
<H3> Voer de reservering in : </H3>

<div class="formulier">
<FORM action="aanmaken_reservering.php" method="POST">
<table>
<tr><td>klant-id: </td>
<td><input name ="klantid" /></td></tr>
<tr><td>reserveringsnummer: </td>
<td><input name ="reserveringsnummer" /></td></tr>
<tr><td>productnaam: </td>
<td><input name ="productnaam"/></td></tr>
<tr><td>categorie: </td>
<td><input name ="categorie"/></td></tr>
<tr><td>reserveringsdatum: </td>
<td><input name ="reserveringsdatum"/></td></tr>
<tr><td>prijs: </td>
<td><input name ="prijs"/></td></tr>
<tr><td>betaald: </td>
<td><input name ="betaald"/></td></tr>
<tr>
<td colspan="2" >
</div>
<input type ="submit" name="submit"/>
<input type ="button" value="Naar overzicht" onClick="window.location.href='klant_overzicht.php'">
</td>
<div class="right">
</div>
    </body>
</html>
<?php
   include ("connection.php");

   if(isset($_POST["submit"]))
   {
   $klantid = $_POST["klantid"];
   $reserveringsnummer = $_POST["reserveringsnummer"];
   $productnaam = $_POST["productnaam"];
   $categorie = $_POST["categorie"];
   $reserveringsdatum = $_POST["reserveringsdatum"];
   $prijs = $_POST["prijs"];
   $betaald = $_POST["betaald"];
   
   echo "U hebt de volgende gegevens ingevoerd: <br>";
   echo "klantid: $klantid <br>";
   echo "reserveringsnummer: $reserveringsnummer <br>";
   echo "productnaam: $productnaam <br>";
   echo "categorie: $categorie<br>";
   echo "reserveringsdatum: $reserveringsdatum<br>";
   echo "prijs: $prijs<br>";
   echo "betaald: $betaald<br>";
   
   $query = "INSERT INTO `reservering` (`klantid`, `reserveringsnummer`, `productnaam`, `categorie`, `reserveringsdatum`, `prijs`, `betaald`)
   VALUES ('$klantid', '$reserveringsnummer', '$productnaam', '$categorie', '$reserveringsdatum', '$prijs', '$betaald')";
   
   $resultaat = $dbVerbinding->query($query);
   
   $dbVerbinding->close();
   
   }     
?>