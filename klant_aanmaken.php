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
    <H1> De blije hond - Nieuwe klant aanmaken</H1>
<H3> Voer de nieuwe klant in : </H3>

<div class="formulier">
<FORM action="klant_aanmaken.php" method="POST">
<table>
<tr><td>klant naam: </td>
<td><input name ="klantnaam" /></td></tr>
<tr><td>klant adres: </td>
<td><input name ="klantadres" /></td></tr>
<tr><td>klant postcode: </td>
<td><input name ="klantpostcode"/></td></tr>
<tr><td>klant woonplaats: </td>
<td><input name ="klantwoonplaats"/></td></tr>
<tr><td>klant email: </td>
<td><input name ="klantemail"/></td></tr>
<tr><td>klant huisdier: </td>
<td><input name ="klanthuisdier"/></td></tr>
<tr>
<td colspan="2" >
</div>
<input type ="submit" name="submit"/>
<input type ="button" value="naar overzicht" onClick="window.location.href='klant_overzicht.php'">
</td>
<div class="right">
</div>
    </body>
</html>
<?php
   include ("connection.php");

   if(isset($_POST["submit"]))
   {
   $klantnaam = $_POST["klantnaam"];
   $klantadres = $_POST["klantadres"];
   $klantpostcode = $_POST["klantpostcode"];
   $klantwoonplaats = $_POST["klantwoonplaats"];
   $klantemail = $_POST["klantemail"];
   $klanthuisdier = $_POST["klanthuisdier"];
   
   echo "U hebt de volgende gegevens ingevoerd: <br>";
   echo "klantnaam: $klantnaam <br>";
   echo "klantadres: $klantadres <br>";
   echo "klantpostcode: $klantpostcode <br>";
   echo "klantwoonplaats: $klantwoonplaats<br>";
   echo "klantemail: $klantemail<br>";
   echo "klanthuisdier: $klanthuisdier<br>";
   
   $query = "INSERT INTO `klant` (`klantnaam`, `klantadres`, `klantpostcode`, `klantwoonplaats`, `klantemail`, `klanthuisdier`)
   VALUES ('$klantnaam', '$klantadres', '$klantpostcode', '$klantwoonplaats', '$klantemail', '$klanthuisdier')";
   
   $resultaat = $dbVerbinding->query($query);
   
   $dbVerbinding->close();
   
   }     
?>