
<div class="row">
    <div class="col-lg-12">

    </div>
</div>
<div class="menu-info">
    <div class="form-group">

    </div>

    <h3>Registratie vakantiedagen</h3><br>


<?php
$sth = $dbh ->prepare("SELECT beschrijving, datum_van, datum_tot FROM feestdagen");
$sth->execute();


echo '<table border="1"><tr>
        <th>Vakantie dagen</th>
        <th>Datum van</th>
        <th>Datum tot</th>
    </tr>';

while($row = $sth->fetch(PDO::FETCH_ASSOC))
{
    $datetime_van = $row['datum_van'];
    $date_van = date('d/m/Y', strtotime($datetime_van));

    $datetime_tot = $row['datum_tot'];
    $date_tot = date('d/m/Y', strtotime($datetime_tot));
    echo
    "<table border='1'>

    <tr>

        <td>" . $row['beschrijving'] . "</td>
         <td>
        " . $date_tot ."
        </td>
           <td>
        " . $date_van ."
        </td>
    </tr>
";

}
echo "</table>";
?>

    <form name="registratie" method="POST" action="registratie_vakantiedagen.php">
        <table border="0" cellspacing="15px">
            <tr>
                <td colspan="2"><?php if(isset($error))echo $error; ?></td>
            </tr>
            <tr>
                <td><p>Beschrijving</p></td>
                <td>
                    <input type="text" name="beschrijving" class="inp_box" value="<?php if(isset($_POST['beschrijving'])) echo $_POST['beschrijving'];?>" required>
                </td>
            </tr>
            <tr>
                <td><p>Datum van</p></td>
                <td>
                    <input type="date" name="datum_van" class="inp_box" value="<?php if(isset($_POST['datum_van'])) echo $_POST['datum_van'];?>" required>
                </td>
            </tr>
            <tr>
                <td><p>Datum tot</p></td>
                <td>
                    <input type="date" name="datum_tot" class="inp_box" value="<?php if(isset($_POST['datum_tot'])) echo $_POST['datum_tot'];?>" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Toevoegen" name="submit" class="sub_btn">
                </td>
            </tr>
        </table>
    </form>
</div>