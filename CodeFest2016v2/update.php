<?php
include 'connector.php';

if($_POST['akkoord'] == 'Nee'){
    $akkoord = 1;
} else {
    $akkoord = 0;
}

$verlof_ID = $_POST['verlofid'];

$sql = "UPDATE  ziekte_en_verlof SET akkoord=:akkoord WHERE verlof_ID=:verlofid";
$sth = $dbh->prepare($sql);
$sth->bindParam(':akkoord',$akkoord);
$sth->bindParam(':verlofid',$verlof_ID);
$sth->execute();

header('location: home.php?page=verlofbeoordelen');
?>