<?php

//koneksi
$conn = mysqli_connect('localhost','root','','db_komkordik');

//register
if(isset($_POST['register'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];

//insert db
$insert = mysqli_query($conn,"INSERT INTO tb_tes (username,password) VALUES ('$username','$password')");

if($insert){
    header('location:index.php');
} else {
    echo '
    <script>
        alert("Registrasi Gagal");
        widow.location.href="register.php";
    </script>
    ';
}
    }
?>