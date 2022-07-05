<?php
session_start();
if (!isset($_SESSION['username']) || empty($_SESSION['username']) || !empty($_SESSION['user_id'])) {
    // header("location:../KOMKORDIK/login.php");
    header("location:./login.php");
}
$user       = $_SESSION['username'];
?>