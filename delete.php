<?php
include "mysql_mysqli.inc.php";
include 'function.php';

$id_dokter = $_GET['id_dokter'];
$query = mysqli_query($mysqli, "DELETE FROM kom_dokter WHERE id='$id_dokter'");

header('Location:index.php');
?>