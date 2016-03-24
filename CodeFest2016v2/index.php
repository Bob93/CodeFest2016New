<?php
session_start();
if (isset($_SESSION['login'])){
    header("location:" . $_SESSION['login'] .  "?page=verlof");
} else {
    header("location: landing.php");
}
