<?php
session_start();
include_once("conexion.php");
$cid = $_GET['cid'];
if (isset($_GET['cid'])) {
    $sql = " DELETE FROM caregiver WHERE caregiver_id='" . $cid . "'";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));
    echo '<script type="text/javascript">
            alert("Employee successfully deleted.");
            location="index.php";
            window.opener.location.reload();
            window.close();
            </script>';
    
    
}


?>