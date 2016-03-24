<?php
session_start();
include 'connector.php';
$project_ID = $_POST['project'];
$datum = $_POST['datum'];
$datum = date("Y-m-d", strtotime($datum) );
$aantal_uren = $_POST['aantaluren'];
$aantaloveruren = $_POST['aantaloveruren'];
$werknemernummer = $_SESSION['werknemernummer'];
echo $project_ID . '<br/>' .
$datum . '<br/>' .
$aantal_uren . '<br/>' .
$aantaloveruren . '<br/>' .
$werknemernummer;




$sth = $dbh->prepare("INSERT INTO uren(werknemernummer, aantal_uren, aantal_overuren, project_ID, datum)
VALUES(:werknemernummer, :aantal_uren, :aantal_overuren, :project_ID, :datum)");
$sth->bindParam(':werknemernummer', $werknemernummer);
$sth->bindParam(':aantal_uren',$aantal_uren);
$sth->bindParam(':aantal_overuren',$aantal_overuren);
$sth->bindParam(':project_ID',$project_ID);
$sth->bindParam(':datum',$datum);
$sth->execute();

// header("location: index.php")
?>