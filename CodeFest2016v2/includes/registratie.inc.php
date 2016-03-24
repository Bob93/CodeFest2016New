<?php
$sth = $dbh ->prepare("SELECT max(werknemernummer)FROM person");
$sth->execute();

while($person = $sth->fetch(PDO::FETCH_ASSOC)) {
    $testje = $person['max(werknemernummer)'];
}


?>
<div class="row">
    <div class="col-lg-12">

    </div>
</div>
<div class="menu-info">
    <div class="form-group">

    </div>

    <h3>Registratie medewerker</h3><br>

    <form name="registratie" method="POST" action="registratie_medewerker.php">
        <table border="0" cellspacing="15px">
            <tr>
                <td colspan="2"><?php if(isset($error))echo $error; ?></td>
            </tr>
            <tr>
                <td><p>Voornaam</p></td>
                <td>
                    <input type="text" name="voornaam" class="inp_box" value="<?php if(isset($_POST['voornaam'])) echo $_POST['voornaam'];?>" required>
                </td>
            </tr>
            <tr>
                <td><p>Tussenvoegsel</p></td>
                <td>
                    <input type="text" name="tussenvoegsel" class="inp_box" value="<?php if(isset($_POST['tussenvoegsel'])) echo $_POST['tussenvoegsel'];?>">
                </td>
            </tr>
            <tr>
                <td><p>Achternaam</p></td>
                <td>
                    <input type="text" name="achternaam" class="inp_box" value="<?php if(isset($_POST['achternaam'])) echo $_POST['achternaam'];?>" required>
                </td>
            </tr>
            <tr>
                <td><p>Gebruikersnaam</p></td>
                <td>
                    <input type="text"  name="gebruikersnaam" class="inp_box" value="<?php if(isset($_POST['gebruikersnaam'])) echo $_POST['gebruikersnaam'];?>" required>
            </tr>
            <tr>
                <td><p>Werknemernummer</p></td>
                <td>
                    <input type="number"  name="werknemernummer" value="<?php echo $testje + 1 ?>" class="inp_box" required>
            </tr>
            <tr>
                <td><p>deeltijdfactor</p></td>
                <td>
                    <input type="number" step="0.01" name="deeltijdfactor" class="inp_box" value="<?php if(isset($_POST['gebruikersnaam'])) echo $_POST['gebruikersnaam'];?>" required>
            </tr>
            <td><p>Type Werknemer</p></td>
            <td>
                <select name="typewerknemer">
                    <option value=1>Werknemer</option>
                    <option value=2>Administratief</option>
                    <option value=3>Systeembeheer</option>
                    <option value=4>Manager</option>
                </select>
                </td>
                </tr>
            <tr>
                <td><p>Wachtwoord</p></td>
                <td>
                    <input type="password" name="wachtwoord" class="inp_box" value="<?php if(isset($_POST['gebruikersnaam'])) echo $_POST['gebruikersnaam'];?>" required>
                </td>
            </tr>
            <tr>
                <td><p>Wachtwoord herhalen</p></td>
                <td>
                    <input type="password" name="wachtwoord_herhaling" class="inp_box" value="<?php if(isset($_POST['wachtwoord_herhaling'])) echo $_POST['wachtwoord_herhaling'];?>" required>
                </td>
            </tr>
            <tr>
                <td><p>Geboortedatum</p></td>
                <td>
                    <input type="date" name="geboortedatum" class="inp_box" value="<?php if(isset($_POST['geboortedatum'])) echo $_POST['geboortedatum'];?>"required>
                </td>
            </tr>
            <tr>
                <td><p>Geslacht</p></td>
                <td>
                    <input type="radio" name="geslacht" value="m"
                           <?php if(isset($_POST['geslacht']) && $_POST['geslacht']=='m'):?>checked<?php endif ?> >M
                    <input type="radio" name="geslacht" value="v"
                           <?php if(isset($_POST['geslacht']) && $_POST['geslacht']=='v'):?>checked<?php endif ?>>V
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="registreren" name="submit" class="sub_btn">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>


</div>