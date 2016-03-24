
<div class="row">
    <div class="col-lg-12">


    </div>
</div>
<div class="menu-info">
    <div class="form-group">

    </div>
    <h3>Accepteren/afwijzen verlof</h3>

    <?php

    $sth = $dbh ->prepare("SELECT *  FROM ziekte_en_verlof");
    $sth->execute();


    echo "<table border='1'>
<tr>
<th>Type</th>
<th>Van</th>
<th>Tot</th>
<th>Werknemernummer</th>
<th>Akkoord</th>
</tr>";

    while($person = $sth->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr>";
        echo "<td>" . $person['type_Verlof'] . "</td>";
        echo "<td>" . Date("d/m/Y", strtotime($person['van_Datum'])) . "</td>";
        echo "<td>" . Date("d/m/Y", strtotime($person['tot_Datum'])) . "</td>";
        echo "<td>" . $person['werknemernummer'] . "</td>";
        echo "<form action=\"update.php\" method=\"POST\">";
        if($person['akkoord'] == 1){
            echo "<td><input type=\"text\" name=\"akkoord\" min=\"0\" max=\"1\" value=\"Ja\" readonly></td>";
        }else {
            echo "<td><input type=\"text\" name=\"akkoord\" min=\"0\" max=\"1\" value=\"Nee\" readonly></td>";
        }
        echo "<td><input type=\"hidden\" name=\"verlofid\" value=\"" . $person['verlof_ID'] . "\"></td>";
        echo "<td><input type=\"submit\" value=\"Wijzig\" name=\"submit\" class=\"sub_btn\"></td></form>";
        echo "</tr>";
    }

    echo "</table>";

    ?>



</div>