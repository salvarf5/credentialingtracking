<?php
session_start();

    include_once('conexion.php');
    $cid = $_GET['cid'];
    $sql = "SELECT * FROM caregiver WHERE caregiver_id='".$cid."' LIMIT 1";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($res);
    $email = $row['email'];
   if(isset($_GET['data'])){
      parse_str($_GET['data']);
        foreach($myArray as $credentials){
            $asunto = "Document Expired";
        $mensaje = "Hello, <br>you have the following document expired: <b><i>".strtoupper($credentials)."</i></b>. Please renew and send a copy to the agency.<br><br>Thanks! ";
        $from = "Amazing Home Health Care, Inc.";
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: ".$from."\r\n";

        $mail = mail($email,$asunto,$mensaje,$headers);
            
        }
        if($mail){
            $update = "update caregiver set times_notified = times_notified + 1 where caregiver_id ='".$cid."'";
             $res2 = mysqli_query($con, $update) or die(mysqli_error($con));
             echo "<script>alert('EMAIL SUCCESFULLY SENT')</script>";
             echo "<script>window.close();</script>";

        }else{
            echo 'UNABLE TO SEND EMAIL';
            echo '<script> window.setTimeout("window.close()", 2000); </script>';
        }
  }

?>
