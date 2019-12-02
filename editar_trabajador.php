<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Editar Trabajador</title>
  <link rel="stylesheet" type="text/css" href="estilos/style.php"/>
</head>
<?php
session_start();
include_once("conexion.php");
$cid = $_GET['cid'];

    $sql = "SELECT * FROM caregiver WHERE caregiver_id='".$cid."'";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));
    while($row = mysqli_fetch_assoc($res)){
        $contenidoviejo1 = $row['name'];
        $contenidoviejo2 = $row['lastname'];
        $contenidoviejo3 = $row['dob'];
        $contenidoviejo4 = $row['social'];
        $contenidoviejo5 = $row['email'];
        $contenidoviejo6 = $row['title'];
        $contenidoviejo7 = $row['professional'];
        $contenidoviejo8 = $row['professionalexp'];
        $contenidoviejo9 = $row['cpr'];
        $contenidoviejo10 = $row['driverlicense'];
        $contenidoviejo11 = $row['autoinsurance'];
        $contenidoviejo12 = $row['liability'];
        $contenidoviejo13 = $row['physical'];
        $contenidoviejo14 = $row['tbt'];
        $contenidoviejo15 = $row['background'];
        $contenidoviejo16 = $row['annualcredit'];
        $contenidoviejo17 = $row['biannualcredit'];
        $contenidoviejo18 = $row['passport_work'];
        $contenidoviejo19 = $row['90days'];
        $contenidoviejo20 = $row['annualdays'];
        echo "<div id='contenido2'><form action='' method='post'>
            <label>Name</label><br />
            <textarea name='contenido1' rows='1' cols='15'>$contenidoviejo1</textarea> &nbsp;
            <br /><br />
            <label>Last Name</label><br />
            <textarea name='contenido2' rows='1' cols='15'>$contenidoviejo2</textarea> &nbsp;
            <br /><br />
            <label>DOB</label><br />
            <input name='contenido3' value='$contenidoviejo3' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Social Security</label><br />
            <textarea name='contenido4' rows='1' cols='15'>$contenidoviejo4</textarea> &nbsp;
            <br /><br />
            <label>Email</label><br />
            <textarea name='contenido5' rows='1' cols='40'>$contenidoviejo5</textarea> &nbsp;
            <br /><br />
            <label>Title</label><br />
            <textarea name='contenido6' rows='1' cols='15'>$contenidoviejo6</textarea> &nbsp;
            <br /><br />
            <label>Professional License</label><br />
            <textarea name='contenido7' rows='1' cols='15'>$contenidoviejo7</textarea> &nbsp;
            <br /><br />
            <label>Professional License Expiration Date</label><br />
            <input name='contenido8' value='$contenidoviejo8' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>CPR</label><br />
            <input name='contenido9' value='$contenidoviejo9' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Driver License</label><br />
            <input name='contenido10' value='$contenidoviejo10' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Auto License</label><br />
            <input name='contenido11' value='$contenidoviejo11' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Liability Insurance</label><br />
            <input name='contenido12' value='$contenidoviejo12' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Physical Exam</label><br />
            <input name='contenido13' value='$contenidoviejo13' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>TBT</label><br />
            <input name='contenido14' value='$contenidoviejo14' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Background</label><br />
            <input name='contenido15' value='$contenidoviejo15' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Annual Credit</label><br />
            <input name='contenido16' value='$contenidoviejo16' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Bi-Annual Credit</label><br />
            <input name='contenido17' value='$contenidoviejo17' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>Passport/Work Permit</label><br />
            <input name='contenido18' value='$contenidoviejo18' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>90 Days Eval</label><br />
            <input name='contenido19' value='$contenidoviejo19' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <label>annual Eval</label><br />
            <input name='contenido20' value='$contenidoviejo20' type='text' onblur=(this.type='text') onfocus=(this.type='date')></input> &nbsp;
            <br /><br />
            <input type='submit' name='editar' value='Editar' /></div>";
        if(isset($_POST['editar'])){
            $contenidonuevo1 = $_POST['contenido1'];
            $contenidonuevo2 = $_POST['contenido2'];
            $contenidonuevo3 = $_POST['contenido3'];
            $contenidonuevo4 = $_POST['contenido4'];
            $contenidonuevo5 = $_POST['contenido5'];
            $contenidonuevo6 = $_POST['contenido6'];
            $contenidonuevo7 = $_POST['contenido7'];
            $contenidonuevo8 = $_POST['contenido8'];
            $contenidonuevo9 = $_POST['contenido9'];
            $contenidonuevo10 = $_POST['contenido10'];
            $contenidonuevo11 = $_POST['contenido11'];
            $contenidonuevo12 = $_POST['contenido12'];
            $contenidonuevo13 = $_POST['contenido13'];
            $contenidonuevo14 = $_POST['contenido14'];
            $contenidonuevo15 = $_POST['contenido15'];
            $contenidonuevo16 = $_POST['contenido16'];
            $contenidonuevo17 = $_POST['contenido17'];
            $contenidonuevo18 = $_POST['contenido18'];
            $contenidonuevo19 = $_POST['contenido19'];
            $contenidonuevo20 = $_POST['contenido20'];
            $sql2 = "UPDATE caregiver SET name='".$contenidonuevo1."', lastname='".$contenidonuevo2."', dob='".$contenidonuevo3."', social='".$contenidonuevo4."', email='".$contenidonuevo5."', title='".$contenidonuevo6."', professional='".$contenidonuevo7."', professionalexp='".$contenidonuevo8."', cpr='".$contenidonuevo9."', driverlicense='".$contenidonuevo10."', autoinsurance='".$contenidonuevo11."', liability='".$contenidonuevo12."', physical='".$contenidonuevo13."', tbt='".$contenidonuevo14."', background='".$contenidonuevo15."', annualcredit='".$contenidonuevo16."', biannualcredit='".$contenidonuevo17."', passport_work='".$contenidonuevo18."', 90days='".$contenidonuevo19."', annualdays='".$contenidonuevo20."' WHERE caregiver_id='".$cid."'";
            $res2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
            echo '<script type="text/javascript">
            alert("Trabajador editado con exito.");
            location="vista_trabajador.php?cid='.$cid.'";
            window.opener.location.reload();
            </script>';
            
        }
     }   

?>
</html>