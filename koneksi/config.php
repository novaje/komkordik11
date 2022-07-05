<?php
include "mysql_mysqli.inc.php";

session_start();

//membuatkoneksi
$hostname_conn  = "localhost";
$database_conn  = "db_komkordik";
$username_conn  = "root";
$password_conn  = "";
$conn = mysql_connect($hostname_conn,$username_conn,$password_conn) 
        or trigger_error(mysql_error(),E_USER_ERROR);



?> 