<?php


$sth = $dbh ->prepare("SELECT voornaam, tussenvoegsel, achternaam, werknemernummer,
geboortedatum, datum_in_dienst, afdeling.beschrijving FROM person INNER JOIN afdeling ON person.afdeling_ID=afdeling.afdeling_ID");
$sth->execute();

echo "<table border='1'>
<tr>
<th>Naam</th>
<th>Werknemernummer</th>
<th>Geboortedatum</th>
<th>Datum in dienst</th>
<th>Afdeling</th>
</tr>";

while($person = $sth->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo "<td>" . $person['voornaam'] . " " . $person['tussenvoegsel'] . " " . $person['achternaam'] . "</td>";
    echo "<td>" . $person['werknemernummer'] . "</td>";
    echo "<td>" . Date("d/m/Y", strtotime($person['geboortedatum'])) . "</td>";
    echo "<td>" . Date("d/m/Y", strtotime($person['datum_in_dienst'])) . "</td>";
    echo "<td>" . $person['beschrijving'] . "</td>";
    echo "</tr>";
}

echo "</table>";



?>