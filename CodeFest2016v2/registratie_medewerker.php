<?php
include 'connector.php';

    if($_POST['wachtwoord']!=$_POST['wachtwoord_herhaling']){
        $error= "Wachtwoord moet hetzelfde zijn!";
    }

    // Validatie voor checkbox
    if(!isset($error) && !isset($_POST['geslacht'])){
        $error = "Selecteer een geslacht";
    }
        $voornaam = $_POST['voornaam'];
        $tussenvoegsel = $_POST['tussenvoegsel'];
        $achternaam = $_POST['achternaam'];
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];
        $geslacht = $_POST['geslacht'];
        $geboortedatum = $_POST['geboortedatum'];
        $werknemernummer = $_POST['werknemernummer'];
        $deeltijdfactor = $_POST['deeltijdfactor'];
        $typewerknemer = $_POST['typewerknemer'];



        $sql = "INSERT INTO person
            (voornaam,tussenvoegsel,achternaam,gebruikersnaam,wachtwoord,geslacht,geboortedatum, deeltijdfactor, afdeling_ID, type_ID, datum_in_dienst, werknemernummer)
            VALUES (:voornaam,:tussenvoegsel,:achternaam,:gebruikersnaam,:wachtwoord,:geslacht,:geboortedatum, :deeltijdfactor, :afdeling_ID, :type_ID, :datum_in_dienst, :werknemernummer)
            ";
        $sth = $dbh->prepare($sql);
        $sth->bindParam(':voornaam',$voornaam);
        $sth->bindParam(':tussenvoegsel', $tussenvoegsel);
        $sth->bindParam(':achternaam', $achternaam);
        $sth->bindParam(':gebruikersnaam', $gebruikersnaam);
        $sth->bindParam(':wachtwoord', $wachtwoord);
        $sth->bindParam(':geslacht', $geslacht);
        $sth->bindParam(':geboortedatum', $geboortedatum);
        $sth->bindParam(':deeltijdfactor', $deeltijdfactor = 1);
        $sth->bindParam(':afdeling_ID', $afdeling_ID = 1);
        $sth->bindParam(':type_ID', $typewerknemer);
        $sth->bindParam(':werknemernummer', $werknemernummer);
        $sth->bindParam(':datum_in_dienst', $datum_in_dienst = date('Y-m-d '));
        $sth->execute();
        if($sth){
            $_SESSION['msg'] = "Succesvol geregistreerd";
        }

header("location: home.php?page=registratie")
?>