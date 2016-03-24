<?php
include 'connector.php';



// Validatie voor checkbox

$beschrijving = $_POST['beschrijving'];
$datum_van = $_POST['datum_van'];
$datum_tot = $_POST['datum_tot'];




$sql = "INSERT INTO feestdagen
            (beschrijving, datum_van, datum_tot)
            VALUES (:beschrijving,:datum_van,:datum_tot)
            ";
$sth = $dbh->prepare($sql);
$sth->bindParam(':beschrijving',$beschrijving);
$sth->bindParam(':datum_van', $datum_van = date('Y-m-d'));
$sth->bindParam(':datum_tot', $datum_tot = date('Y-m-d'));

$sth->execute();
if($sth){
    echo "Succesvol Toegevoegd";
}

header("location: home.php?page=vakantiedagen")
?>