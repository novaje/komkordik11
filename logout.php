<?php
include "mysql_mysqli.inc.php";
session_start();
session_destroy();
header('location:login.php');








?>