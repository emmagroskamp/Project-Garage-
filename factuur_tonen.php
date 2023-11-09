<HTML>
<HEAD>
<TITLE>De blije hond</TITLE>
</HEAD>

<BODY>
    <div class="factuur">
        <img src="img/factuur_image.jpg" alt="hond" width="30%" height="40%">
    <?php

        include ("connection.php");
        $klantid = $_POST['verstopt'];

        $query = "SELECT * FROM `klant` WHERE klantid = $klantid";
        // Voer query uit in de database. Gebruik de verbinding zoals die in connection.php staat
        $resultaat = $dbVerbinding->query($query);

        // De resultaten worden ingelezen
        $rij = $resultaat->fetch_array(MYSQLI_ASSOC);

        echo "

            <H1> de blije hond - factuur klant</H1>
            <H3> Klantnaam $rij[klantnaam]</H3>
       
            <table>
                <tr><td>Klantnummer: </td><td>$rij[klantid]</td></tr>
                <tr><td>Klantnaam: </td><td>$rij[klantnaam]</td></tr>
                <tr><td>Adres: </td><td>$rij[klantadres]</td></tr>
                <tr><td>Postcode: </td><td>$rij[klantpostcode]</td></tr>
                <tr><td>Woonplaats: </td><td>$rij[klantwoonplaats]</td></tr>              
            </table>
        ";
        // Reset resultaat
        $resultaat->free_result();

        echo "<H2>Details reservering</H2>";

        //$query = "SELECT * FROM `reserveringregel`
                    //INNER JOIN `reservering` ON reservering.reserveringsnummer = reserveringregel.reserveringsnummer
                    //INNER JOIN `product` ON reserveringregel.productnaam = product.productnaam
                    //WHERE reservering.klantid = $klantid";
       
        $query = "SELECT * FROM `reservering` WHERE klantid = $klantid";
        
        // Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
        $resultaat = $dbVerbinding->query($query);

        // De resultaten worden ingelezen in een array
        while ($rij = $resultaat->fetch_array(MYSQLI_ASSOC))
        {
            $allerijen[] = $rij;
        }

        echo "<TABLE border='1'>
                <TR><TH>reserveringsnummer</TH>
                <TH>klantid</TH>
                <TH>productnaam</TH>
                <TH>categorie</TH>
                <TH>reserveringsdatum<TH>
                <TH>prijs</TH>
                <TH>betaald</TH>
                <TH>Eerste kolom</TH>
                <TH>Tweede kolom</TH>
                <TH>Derde kolom</TH></TR>
        ";

        // Elke regel uit de array wordt in een tabel getoond
        foreach ($allerijen as $record)
        {  
            echo"<TR><TD>$record[reserveringsnummer]</TD>";
            echo"<TD>$record[klantid]</TD>";
            echo"<TD>$record[productnaam]</TD>";
            echo"<TD>$record[categorie]</TD>";
            echo"<TD>$record[reserveringsdatum]</TD>";
            echo"<TD></TD>";
            echo"<TD>$record[prijs]</TD>";
            echo"<TD>$record[betaald]</TD>";
            echo "<TD><FORM action='wijzigen_reservering.php' method='post'>
            <input type='hidden' name='verstopt' value='$record[klantid]'>
            <input type = 'submit' name='wijzig' value='wijzig'>
            </FORM></TD>";

            echo "<TD><FORM action='verwijderen_reservering.php' method='post'>
            <input type='hidden' name='verstopt' value='$record[klantid]'>
            <input type = 'submit' name='verwijderen' value='verwijderen'>
            </FORM></TD>";
            
            echo "<TD><FORM action='aanmaken_reservering.php' method='post'>
            <input type='hidden' name='verstopt' value='$record[klantid]'>
            <input type = 'submit' name='reserveren' value='reserveren'>
            </FORM></TD>";

            echo "</TR>";
        }
        echo "</TABLE>";
        
        
        

        //reset resultaat en sluit de verbinding
        $resultaat->free_result();
        $dbVerbinding->close();
    ?>

</TABLE>
    </div>
</BODY>
</HTML>