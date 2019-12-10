<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "trabajadores";

$con = mysqli_connect($host, $username, $password) or die(mysqli_error($con));
mysqli_select_db($con, $db);
?>