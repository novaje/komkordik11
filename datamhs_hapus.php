<?php
require 'function.php'

$Getusername = $_GET['id_role'];

//delete
$query = mysqli_query("DELETE FROM kom_role WHERE username='$Getid_role'");
$query = mysqli_query("DELETE FROM kom_user WHERE username='$Getid_role'");

if($query) {
    ("location:dosenpembimbing.php?DeleteSucces=true");
} else {
    ("location:index.php?DeleteFailed=true");
}
?>