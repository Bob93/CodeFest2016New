<?php
include '../connector.php';

$sth = $dbh ->prepare("SELECT beschrijving, datum_van, datum_tot FROM feestdagen");
$sth->execute();


echo "<table border='1'>
<tr>
<th>Vakantiedagen</th>
</tr>";

while($row = $sth->fetch(PDO::FETCH_ASSOC))
{
    $datetime_van = $row['datum_van'];
    $date_van = date('d/m/Y', strtotime($datetime_van));

    $datetime_tot = $row['datum_tot'];
    $date_tot = date('d/m/Y', strtotime($datetime_tot));
    echo
    "<tr>
        <td>" . $row['beschrijving'] . "</td>
    </tr>
    <tr>
        <th> Datum van</th>
    </tr>
    <tr>
        <td>
        " . $date_van ."
        </td>
    </tr>
    <tr>
        <th> Datum tot</th>
    </tr>
    <tr>
        <td>
        " . $date_tot ."
        </td>
    </tr>";

}
echo "</table>";
?>

<input type="text" value="beschrijving">
<input type="date" value="datum van">
<input type="date" value="datum tot">
<input type="submit" value="toevoegen" name="submit" class="sub_btn">
