<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Caregiver - Crear Trabajador</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.php" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
        rel="stylesheet"  type='text/css'>

</head>

<body>
    <div id="wraper">
        <?php echo "<a class='example_e' href='index.php'>&#8592; Go back!</a>";?>

            <?php
$nuevonombre = "";
$nuevoapellido = "";
$nuevofechana = "";
$nuevosegurosocial = "";
$nuevoemail = "";
$nuevotitle = "";
$nuevolicencia = "";
$nuevolicenciafecha = "";
$nuevocpr = "";
$nuevodriver = "";
$nuevoauto = "";
$nuevoliability = "";
$nuevophysical = "";
$nuevotbt = "";
$nuevobackground = "";
$nuevoannual = "";
$nuevobiannual = "";
$nuevopassportwork = "";
$nuevo90eval = "";
$nuevoannualeval = "";

?>
                <hr />
                <br />
                <br />
                <br />
                <div id="contenido">
                    <div id="encabezadoreg">
                        <h3>ADD NEW EMPLOYEE</h3>
                        <hr />
                    </div>

                    <form action="crear_trabajador_parse.php" method="post">
                        <p>Name: </p>
                        <input type="text" name="nombrenuevo" class="entradas" value="<?php echo $nuevonombre ?>" autocomplete="off" required/>
                        <p>Last Name: </p>
                        <input type="text" name="apellidonuevo" class="entradas" value="<?php echo $nuevoapellido ?>" autocomplete="off" required/>
                        <p>DOB: </p>
                        <input type="date" name="fechananuevo" class="entradas" value="<?php echo $nuevofechana ?>" autocomplete="off"  required/>
                        <p>Social Security: </p>
                        <input type="text" id="ssn" maxlength="11" name="segurosocialnuevo" pattern="^\d{3}-\d{2}-\d{4}$" class="entradas" value="<?php echo $nuevosegurosocial ?>" autocomplete="off" required/>
                        <p>Email: </p>
                        <input type="email" name="emailnuevo" class="entradas" value="<?php echo $nuevoemail ?>" autocomplete="off" / required>
                        <p>Title: </p>
                        <input type="text" name="titlenuevo" class="entradas" value="<?php echo $nuevotitle ?>" autocomplete="off" />
                        <p>Professional License: </p>
                        <input type="text" name="licencianuevo" class="entradas" value="<?php echo $nuevolicencia ?>" autocomplete="off" />
                        <input type="date" name="licenciafechanuevo" class="entradas" value="<?php echo $nuevolicenciafecha ?>" autocomplete="off" />
                        <p>CPR: </p>
                        <input type="date" name="cprnuevo" class="entradas" value="<?php echo $nuevocpr ?>" autocomplete="off" />
                        <p>Driver License: </p>
                        <input type="date" name="drivernuevo" class="entradas" value="<?php echo $nuevodriver ?>" autocomplete="off" />
                        <p>Auto Insurance: </p>
                        <input type="date" name="autonuevo" class="entradas" value="<?php echo $nuevoauto ?>" autocomplete="off" />
                        <p>Liability Insurance: </p>
                        <input type="date" name="liabilitynuevo" class="entradas" value="<?php echo $nuevoliability ?>" autocomplete="off" />
                        <p>Physical Exam: </p>
                        <input type="date" name="physicalnuevo" class="entradas" value="<?php echo $nuevophysical ?>" autocomplete="off" />
                        <p>TBT Test: </p>
                        <input type="date" name="tbtnuevo" class="entradas" value="<?php echo $nuevotbt ?>" autocomplete="off" />
                        <p>Background: </p>
                        <input type="date" name="backgroundnuevo" class="entradas" value="<?php echo $nuevobackground ?>" autocomplete="off" />
                        <p>Annual Credit(12): </p>
                        <input type="date" name="annualnuevo" class="entradas" value="<?php echo $nuevoannual ?>" autocomplete="off" />
                        <p>Bi-Annual Credit(24): </p>
                        <input type="date" name="biannualnuevo" class="entradas" value="<?php echo $nuevobiannual ?>" autocomplete="off" />
                        <p>Passport/Work Permit: </p>
                        <input type="date" name="passportworknuevo" class="entradas" value="<?php echo $nuevopassportwork ?>" autocomplete="off" />
                        <p>90 Days Eval: </p>
                        <input type="date" name="90evalnuevo" class="entradas" value="<?php echo $nuevo90eval ?>" autocomplete="off" />
                        <p>Annual Eval: </p>
                        <input type="date" name="annualevalnuevo" class="entradas" value="<?php echo $nuevoannualeval ?>" autocomplete="off" />
                        <br />
                        <input type="hidden" name="registro" value="1" />
                        <input type="submit" name="crear_trabajador" class="entradas" value="Add Employee" title="This feature has been disable by the administrator. Demo purposes only." disabled/>
                        <span data-title="This feature has been disable by the adminsitrator. Demo purposes only."><i class="fa fa-info-circle tooltip" style="color:white;" aria-hidden="true" ></i></span>
                    </form>
                </div>
    </div>
</body>
<script>
document.getElementById("ssn").onkeyup = function() {
  var val = this.value.replace(/\D/g, '');
  var newVal = '';

  if(val.length > 4) {
    this.value = val;
  }

  if((val.length > 3) && (val.length < 6)) {
    newVal += val.substr(0, 3) + '-';
    val = val.substr(3);
  }

  if (val.length > 5) {
    newVal += val.substr(0, 3) + '-';
    newVal += val.substr(3, 2) + '-';
    val = val.substr(5);
  }

  newVal += val;
  this.value = newVal;
};
</script>
</html>