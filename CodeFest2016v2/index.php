<?php
session_start();
if (isset($_SESSION['ingelogd'])){
    if ($_SESSION['ingelogd'] == true){
        if (isset($_SESSION['login'])){
            header("location:" . $_SESSION['login'] .  "");
        } else {
            header("location: landing.php");
        }
    }
} else {
    header("location: landing.php");
}
?>
