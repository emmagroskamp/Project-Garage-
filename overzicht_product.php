<html>
    <head><title>De blije hond</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="deblijehond.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="left">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="homepagina.php"> De blije hond</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="homepagina.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="klant_aanmaken.php">Nieuwe klant</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="klant_overzicht.php">Klant overzicht</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="overzicht_product.php">Overzicht producten<span class="sr-only"></span></a>
            </li>
        </ul>
    </nav>
    </div>
    <!--Code voor de navigatiebalk bovenin de webpagina.-->

    <div class="main">
        
    <?php
        //in connection.php wordt de verbinding naar de database gemaakt
        include("connection.php");
    ?>
    <br>
    <div class="klanten_titel">
    <H1> Overzicht producten</H1>
    </div>
    <div class="overzicht_klant">
    <TABLE border="1">
    <TR>

    <TD>Product nummer</TD>
    <TD>Product naam</TD>
    <TD>Categorie</TD>
    <TD>Prijs</TD>
    </TR>

    <?php

    $query="SELECT * FROM `product`";

    // Voer query uit in de database. Gebruik de verbinding zoals die in connection.php staat
    $resultaat = $dbVerbinding-> query($query);

    // De resultaten worden ingelezen in een array
    while ($rij = $resultaat->fetch_array(MYSQLI_ASSOC))
    {
        $allerijen[] = $rij;
    }

    // Elke regel uit de array wordt in een tabel getoond
    foreach ($allerijen as $record)
    {
    echo"<TR><TD>$record[productnummer]</TD>";
    echo"<TD>$record[productnaam]</TD>";
    echo"<TD>$record[categorie]</TD>";
    echo"<TD>$record[prijs]</TD>";
    

}

// Reset resultaat en sluit de verbinding
$resultaat->free_result();
$dbVerbinding->close();

?>
</TABLE>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


    <div class="right">    
    <div class="row">
        <div class="col-12">
            <p style="text-align: center;">© de blije hond - 2023</p>
        </div>
    </div>
    </div>
</body>
</html>