<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vista Trabajador</title>

    <link rel="stylesheet" type="text/css" href="estilos/style.php" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="wraper">
        <h1 align="center">Employee</h1>
        <br />
        <?php
session_start();
?>

            <?php
include_once("conexion.php");
$cid = $_GET['cid'];
$trabajador = "";
$sql = "SELECT * FROM caregiver WHERE caregiver_id='".$cid."' LIMIT 1";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));
$datos = array();
if (mysqli_num_rows($res) == 1){
    echo "<tr><td valign='top' style='border: 1px solid #000000;'><div style='min-height: 25px;'><spam class='edit'><a href='borrar_trabajador.php?cid=".$cid."' class='confirmation' style='cursor:pointer;' title='Delete'><i class='fa fa-trash-o'></i></a> <a href='editar_trabajador.php?cid=".$cid."' style='cursor:pointer;' title='Edit'><i class='fa fa-edit'></i> | </a></spam>
           </div><tr><td colspan='2'></td></tr>";
    $trabajador .= "<table width='100%'  border=1 class='table_header3'>";
    $trabajador .= "<tr><th style='background: linear-gradient(to right, #67b26b, #4ca2cb) !important;' align='center' colspan='2' class='table_header'>Caregiver Demographics</th></tr>";
    $trabajador .= "<tr><th colspan='2'>&nbsp;</th></tr>";
    while ($row = mysqli_fetch_assoc($res)){
        $datos[] = $row;
        $id = $row['caregiver_id'];
        $name = $row['name'];
        $lastname = $row['lastname'];
        $title = strtoupper($row['title']);
        $dob = DATE_FORMAT(new DateTime($row['dob']),'m-d-Y') ;
        $socialsecurity = $row['social'];
        $email = $row['email'];
        $professional = $row['professional'];
        if ($row['professionalexp'] == '0000-00-00')
            {
                $professionalexp = "";
            }else{
                $professionalexp = DATE_FORMAT(new DateTime($row['professionalexp']),'m-d-Y');
            }

        if ($row['cpr'] == '0000-00-00')
            {
                $cpr = "";
            }else{
                $cpr = DATE_FORMAT(new DateTime($row['cpr']),'m-d-Y');
            }

         if ($row['driverlicense'] == '0000-00-00')
            {
                $driverlicense = "";
            }else{
                $driverlicense = DATE_FORMAT(new DateTime($row['driverlicense']),'m-d-Y');
            }

         if ($row['autoinsurance'] == '0000-00-00')
            {
                $autoinsurance = "";
            }else{
                $autoinsurance = DATE_FORMAT(new DateTime($row['autoinsurance']),'m-d-Y');
            }

        if ($row['liability'] == '0000-00-00')
            {
                $liability = "";
            }else{
                $liability = DATE_FORMAT(new DateTime($row['liability']),'m-d-Y');
            }

        if ($row['physical'] == '0000-00-00')
            {
                $physical = "";
            }else{
                $physical = DATE_FORMAT(new DateTime($row['physical']),'m-d-Y');
            }

        if ($row['tbt'] == '0000-00-00')
            {
                $tbt = "";
            }else{
                $tbt = DATE_FORMAT(new DateTime($row['tbt']),'m-d-Y');
            }

        if ($row['background'] == '0000-00-00')
            {
                $background = "";
            }else{
                $background = DATE_FORMAT(new DateTime($row['background']),'m-d-Y');
            }

        if ($row['annualcredit'] == '0000-00-00')
            {
                $annualcredit = "";
            }else{
                $annualcredit = DATE_FORMAT(new DateTime($row['annualcredit']),'m-d-Y');
            }

        if ($row['biannualcredit'] == '0000-00-00')
            {
                $biannualcredit = "";
            }else{
                $biannualcredit = DATE_FORMAT(new DateTime($row['biannualcredit']),'m-d-Y');
            }

        if ($row['passport_work'] == '0000-00-00')
            {
                $passportwork = "";
            }else{
                $passportwork = DATE_FORMAT(new DateTime($row['passport_work']),'m-d-Y');
            }

         if ($row['90days'] == '0000-00-00')
            {
                $ndays = "";
            }else{
                $ndays = DATE_FORMAT(new DateTime($row['90days']),'m-d-Y');
            }

        if ($row['annualdays'] == '0000-00-00')
            {
                $annualdays = "";
            }else{
                $annualdays = DATE_FORMAT(new DateTime($row['annualdays']),'m-d-Y');
            }

        /*CHECK EXPIRATION*/
        $todays_date = date("Y-m-d");
        $today = strtotime($todays_date);
        $expiration_date = strtotime($row['cpr']);
        $expiration_date2 = strtotime($row['driverlicense']);
        $expiration_date3 = strtotime($row['professionalexp']);
        $expiration_date4 = strtotime($row['autoinsurance']);
        $expiration_date5 = strtotime($row['liability']);
        $expiration_date6 = strtotime($row['physical']);
        $expiration_date7 = strtotime($row['tbt']);
        $expiration_date8 = strtotime($row['background']);
        $expiration_date9 = strtotime($row['annualcredit']);
        $expiration_date10 = strtotime($row['biannualcredit']);
        $expiration_date11 = strtotime($row['passport_work']);
        $expiration_date12 = strtotime($row['90days']);
        $expiration_date13 = strtotime($row['annualdays']);
        if ($expiration_date > $today || $cpr == "") {
            $color = "darkslategray";
            } else{
            $color = "red";
            /*$asunto = "Document expired";
            $mensaje = "CPR expired on <b><i>$cpr</i></b>";
            $from = "Amazing Home Health Care";
            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $headers .= "From: ".$from."\r\n";

        mail($email,$asunto,$mensaje,$headers);*/
            }
        if ($expiration_date2 > $today || $driverlicense == "") {
            $color2 = "darkslategray";
            } else {
             $color2 = "red";
            }
        if ($expiration_date3 > $today || $professionalexp == "") {
            $color3 = "darkslategray";
            } else {
             $color3 = "red";
            }
        if ($expiration_date4 > $today || $autoinsurance == "") {
            $color4 = "darkslategray";
            } else {
             $color4 = "red";
            }
        if ($expiration_date5 > $today || $liability == "") {
            $color5 = "darkslategray";
            } else {
             $color5 = "red";
            }

        if ($expiration_date6 > $today || $physical == "") {
            $color6 = "darkslategray";
            } else {
             $color6 = "red";
            }

        if ($expiration_date7 > $today || $tbt == "") {
            $color7 = "darkslategray";
            } else {
             $color7 = "red";
            }

        if ($expiration_date8 > $today || $background == "") {
            $color8 = "darkslategray";
            } else {
             $color8 = "red";
            }

        if ($expiration_date9 > $today || $annualcredit == "") {
            $color9 = "darkslategray";
            } else {
             $color9 = "red";
            }

        if ($expiration_date10 > $today || $biannualcredit == "") {
            $color10 = "darkslategray";
            } else {
             $color10 = "red";
            }

        if ($expiration_date11 > $today || $passportwork == "") {
            $color11 = "darkslategray";
            } else {
             $color11 = "red";
            }

        if ($expiration_date12 > $today || $ndays == "") {
            $color12 = "darkslategray";
            } else {
             $color12 = "red";
            }

        if ($expiration_date13 > $today || $annualdays == "") {
            $color13 = "darkslategray";
            } else {
             $color13 = "red";
            }

            }
        $trabajador .= "<tr><th id='nombre' class='table_header2'>Name<td headers='nombre' border: 1px solid black>".$name."  ".$lastname." (".$title.")</td></th></tr>";
        $trabajador .= "<tr><th colspan='2'>&nbsp;</th></tr>";
        $trabajador .= "<tr><th id='dob' class='table_header2'>DOB<td headers='dob'>" .$dob. "</td></th></tr>";
        $trabajador .= "<tr><th colspan='2'>&nbsp;</th></tr>";
        $trabajador .= "<tr><th id='social' class='table_header2'>Social Security<td headers='social'>" .$socialsecurity. "</td></th></tr>";
        $trabajador .= "<tr><th colspan='2'>&nbsp;</th></tr>";
        $trabajador .= "<tr><th id='email' class='table_header2'>Email<td headers='email'>" .$email. "</td></th></tr>";
        $trabajador .= "<tr><th colspan='2'>&nbsp;</th></tr>";
        $trabajador .= "<tr><th style='background: linear-gradient(to right, #67b26b, #4ca2cb) !important;' align='center' colspan='2' class='table_header'>Credential Tracking</th></tr>";
        $trabajador .= "<tr><th colspan='2'>&nbsp;</th></tr>";
        $trabajador .= "<tr><th id='professional' class='table_header2'>Professional License<td headers='professional'>" .$professional. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='professionalexp' class='table_header2'>Professional License expiration date<td headers='professionalexp' style=\"background-color: $color3\">" .$professionalexp. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='cpr' class='table_header2'>CPR<td id='cpr2' headers='cpr' style=\"background-color: $color\">" .$cpr. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='driverlicense' class='table_header2'>Driver License<td headers='driverlicense' style=\"background-color: $color2\">" .$driverlicense. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='autoinsurance' class='table_header2'>Auto Insurance<td headers='autoinsurance' style=\"background-color: $color4\">" .$autoinsurance. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='liability' class='table_header2'>Liability<td headers='liability' style=\"background-color: $color5\">" .$liability. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='physical'class='table_header2'>Physical Exam<td headers='physical' style=\"background-color: $color6\">" .$physical. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='tbt' class='table_header2'>TBT Test<td headers='tbt' style=\"background-color: $color7\">" .$tbt. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='background' class='table_header2'>Background<td headers='background' style=\"background-color: $color8\">" .$background. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='annualcredit' class='table_header2'>Annual Credit<td headers='annualcredit' style=\"background-color: $color9\">" .$annualcredit. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='biannualcredit' class='table_header2'>Bi-annual Credit<td headers='biannualcredit' style=\"background-color: $color10\">" .$biannualcredit. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='passportwork' class='table_header2'>Passport/Work Permit<td headers='passportwork' style=\"background-color: $color11\">" .$passportwork. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='90days' class='table_header2'>90 Days eval<td headers='90days' style=\"background-color: $color12\">" .$ndays. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";
        $trabajador .= "<tr><th id='annualdays' class='table_header2'>Annual eval<td headers='annualdays' style=\"background-color: $color13\">" .$annualdays. "</td></th></tr>";
        $trabajador .= "<tr><td colspan='20'><hr/></td></tr>";

        $trabajador .="</table>";
        echo $trabajador;
}else{
    echo "<p>Se ha producido un error</p>";
}

?>
    </div>

</body>
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function(e) {
        if (!confirm('Are you sure you want to delete this employee?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

</html>