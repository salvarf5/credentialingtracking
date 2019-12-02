<?php
session_start();
    include_once('conexion.php');
    require_once('validaciones.php');   
	$nuevonombre = isset($_POST['nombrenuevo']) ? $_POST['nombrenuevo'] : null;
	$nuevoapellido = isset($_POST['apellidonuevo']) ? $_POST['apellidonuevo'] : null;
    $nuevofechana = isset($_POST['fechananuevo']) ? $_POST['fechananuevo'] : null;
    $nuevosegurosocial = isset($_POST['segurosocialnuevo']) ? $_POST['segurosocialnuevo'] : null;
    $nuevoemail = isset($_POST['emailnuevo']) ? $_POST['emailnuevo'] : null;
    $nuevotitle = isset($_POST['titlenuevo']) ? $_POST['titlenuevo'] : null;
    $nuevolicencia = isset($_POST['licencianuevo']) ? $_POST['licencianuevo'] : null;
    $nuevolicenciafecha = isset($_POST['licenciafechanuevo']) ? $_POST['licenciafechanuevo'] : null;
    $nuevocpr = isset($_POST['cprnuevo']) ? $_POST['cprnuevo'] : null;
    $nuevodriver = isset($_POST['drivernuevo']) ? $_POST['drivernuevo'] : null;
    $nuevoauto = isset($_POST['autonuevo']) ? $_POST['autonuevo'] : null;
    $nuevoliability = isset($_POST['liabilitynuevo']) ? $_POST['liabilitynuevo'] : null;
    $nuevophysical = isset($_POST['physicalnuevo']) ? $_POST['physicalnuevo'] : null;
    $nuevotbt = isset($_POST['tbtnuevo']) ? $_POST['tbtnuevo'] : null;
    $nuevobackground = isset($_POST['backgroundnuevo']) ? $_POST['backgroundnuevo'] : null;
    $nuevoannual = isset($_POST['annualnuevo']) ? $_POST['annualnuevo'] : null;
    $nuevobiannual = isset($_POST['biannualnuevo']) ? $_POST['biannualnuevo'] : null;
    $nuevopassportwork = isset($_POST['passportworknuevo']) ? $_POST['passportworknuevo'] : null;
    $nuevo90eval = isset($_POST['90evalnuevo']) ? $_POST['90evalnuevo'] : null;
    $nuevoannualeval = isset($_POST['annualevalnuevo']) ? $_POST['annualevalnuevo'] : null;
    $errores = array();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	   if (!validarequerido($nuevonombre)) {
      $errores[] = 'All fields are required to be filled.';
   }
        if (!validarequerido($nuevoapellido)) {
      $errores[] = 'All fields are required to be filled.';
   }
        if (!validarequerido($nuevoemail)) {
      $errores[] = 'All fields are required to be filled.';
   }
        if (!validaemail($nuevoemail)) {
      $errores[] = 'Incorrect email format.';
   }
   if(!$errores){
        $sql2 = "SELECT * FROM caregiver WHERE email ='$nuevoemail' OR social ='$nuevosegurosocial'";
        $res2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
        $row2 = mysqli_fetch_assoc($res2);
        if($row2['social'] == $nuevosegurosocial){
            echo "Employee already exists <a href='crear_trabajador.php'>Add </a>a different employee";
        }else{
        if (mysqli_num_rows($res2) == 0){    
        $sql = "INSERT INTO caregiver (name, lastname, dob, social, email, title, professional, professionalexp, cpr, driverlicense, autoinsurance, liability, physical, tbt, background, annualcredit, biannualcredit, passport_work, 90days, annualdays) VALUES ('".$nuevonombre."', '".$nuevoapellido."', '".$nuevofechana."', '".$nuevosegurosocial."', '".$nuevoemail."', '".$nuevotitle."', '".$nuevolicencia."', '".$nuevolicenciafecha."', '".$nuevocpr."', '".$nuevodriver."', '".$nuevoauto."', '".$nuevoliability."', '".$nuevophysical."', '".$nuevotbt."', '".$nuevobackground."', '".$nuevoannual."', '".$nuevobiannual."', '".$nuevopassportwork."', '".$nuevo90eval."', '".$nuevoannualeval."')";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));
    if ($res) {
        /*$asunto = "Registro";
        $mensaje = "Enhorabuena! El trabajador <b><i>$nuevonombre</i></b> ha sido creado con exito";
        $from = "Salvador - Foro";
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: ".$from."\r\n";

        mail($nuevoemail,$asunto,$mensaje,$headers);
        require_once('logout_parse.php');  */
        header("Location: index.php?status=reg_success");    
	}
    }else{
    echo "Email already in use. Please go to the <a href='/caregivers/crear_trabajador.php'>previous page</a> and try using a different email.";    
   }
   }
   }
   }
	
?>
 <?php if ($errores): ?>
       <ul style="color: #f00;">
          <?php foreach ($errores as $error): ?>
             <li> <?php echo $error ?> </li>
          <?php endforeach; ?>
       </ul>
    <?php endif; ?>