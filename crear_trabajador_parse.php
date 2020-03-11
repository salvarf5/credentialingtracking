<?php
session_start();
function convertDate($date) {

    $formats = ['M d, Y', 'Y-m-d'];
    foreach($formats as $f) {
        $d = DateTime::createFromFormat($f, $date);
        $is_date = $d && $d->format($f) === $date;

        if ( true == $is_date ) break;
    }

    return $is_date;

}
    include_once('conexion.php');
    require_once('validaciones.php');
    if(isset($_POST['registro'])){
       $nuevonombre = $_POST['nombrenuevo'];
	$nuevoapellido = $_POST['apellidonuevo'];
    $nuevofechana = $_POST['fechananuevo'];
    $nuevosegurosocial = $_POST['segurosocialnuevo'];
    $nuevoemail = $_POST['emailnuevo'];
    $nuevotitle = $_POST['titlenuevo'];
    $nuevolicencia = $_POST['licencianuevo'];
    $nuevolicenciafecha = $_POST['licenciafechanuevo'];
    $nuevocpr = $_POST['cprnuevo'];
    $nuevodriver = $_POST['drivernuevo'];
    $nuevoauto = $_POST['autonuevo'];
    $nuevoliability = $_POST['liabilitynuevo'];
    $nuevophysical = $_POST['physicalnuevo'];
    $nuevotbt = $_POST['tbtnuevo'];
    $nuevobackground = $_POST['backgroundnuevo'];
    $nuevoannual = $_POST['annualnuevo'];
    $nuevobiannual = $_POST['biannualnuevo'];
    $nuevopassportwork = $_POST['passportworknuevo'];
    $nuevo90eval = $_POST['90evalnuevo'];
    $nuevoannualeval = $_POST['annualevalnuevo'];
    }
$form = array($nuevonombre, $nuevoapellido, $nuevofechana, $nuevosegurosocial, $nuevoemail, $nuevotitle, $nuevolicencia, $nuevolicenciafecha, $nuevocpr, $nuevodriver, $nuevoauto, $nuevoliability, $nuevophysical, $nuevotbt, $nuevobackground, $nuevoannual, $nuevobiannual, $nuevopassportwork, $nuevo90eval, $nuevoannualeval);

        $result = array_slice($form,7,count($form)-7, true);

            for($i=7;$i<count($form);$i++){
        if(empty($form[$i])){
               $form[$i] = '0000-00-00';
            }else {
            $form[$i] = $form[$i];
        }

        }





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
        $sql2 = "SELECT * FROM caregiver WHERE email ='".$form['4']."' OR social ='".$form['3']."'";
        $res2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
        $row2 = mysqli_fetch_assoc($res2);
        if($row2){
            echo "Employee already exists <a href='crear_trabajador.php'>Add </a>a different employee";
        }else{
          if (mysqli_num_rows($res2) == 0){
          $sql = "INSERT INTO caregiver (name, lastname, dob, social, email, title, professional, professionalexp, cpr, driverlicense, autoinsurance, liability, physical, tbt, background, annualcredit, biannualcredit, passport_work, 90days, annualdays) VALUES ('".$form['0']."', '".$form['1']."', '".$form['2']."', '".$form['3']."', '".$form['4']."', '".$form['5']."', '".$form['6']."', '".$form['7']."', '".$form['8']."', '".$form['9']."', '".$form['10']."', '".$form['11']."', '".$form['12']."', '".$form['13']."', '".$form['14']."', '".$form['15']."', '".$form['16']."', '".$form['17']."', '".$form['18']."', '".$form['19']."')";
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
