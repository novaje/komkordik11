<?php

session_start();

//membuatkoneksi
$hostname_conn  = "localhost";
$database_conn  = "db_komkordik";
$username_conn  = "root";
$password_conn  = "";
$conn = mysqli_connect($hostname_conn,$username_conn,$password_conn) 
        or trigger_error(mysqli_error(),E_USER_ERROR);

?> 