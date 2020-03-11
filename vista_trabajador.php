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
        <p id="message_alert" align="center"></p>
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
?>

            <?php
include_once("conexion.php");
$cid = $_GET['cid'];
$trabajador = "";
$sql = "SELECT * FROM caregiver WHERE caregiver_id='".$cid."' LIMIT 1";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));
if ($res){
      $row = mysqli_fetch_assoc($res);
    $times_notified = $row['times_notified'];
    echo "<tr><td valign='top' style='border: 1px solid #000000;'><div style='min-height: 25px;'><a href='?cid=".$cid."&email' class='email_confirmation tooltip' style='cursor:pointer;'><i class='fa fa-envelope-o'></i><div class='right'>
        <h3>Click to nofitfy employee</h3>
        <h4>This employee has been notified <span style='color:red;font-size:20px;'>".$times_notified."</span> times</h4>
<i></i>
    </div></a><spam class='edit'><a href='#' class='confirmation' style='cursor:pointer;' title='Delete'><i class='fa fa-trash-o'></i></a> <a href='editar_trabajador.php?cid=".$cid."' style='cursor:pointer;' title='Edit'><i class='fa fa-edit'></i> | </a></spam>
           </div><tr><td colspan='2'></td></tr>";
    $trabajador .= "<table width='100%'  border=1 class='table_header3'>";
    $trabajador .= "<tr><th style='background: linear-gradient(to right, #67b26b, #4ca2cb) !important;' align='center' colspan='2' class='table_header'>Caregiver Demographics</th></tr>";
    $trabajador .= "<tr><th colspan='2'>&nbsp;</th></tr>";
    $new_row = array_diff_key($row, array_flip(['caregiver_id','expired', 'times_notified']));
    $todays_date = date("Y-m-d");
    foreach ($new_row as $key => $value) {
     $new_row['dob'] = date ("m/d/Y", strtotime($new_row['dob']));
    if ($new_row[$key] == '0000-00-00')  {
       $new_row[$key] = "";
        
        $color = 'darkslategray';
    }elseif(convertDate($new_row[$key]) && $key != 'dob'){
        if ($new_row[$key] > $todays_date) {
            $new_row[$key] =  date ("m/d/Y", strtotime($new_row[$key]));
          $color = 'darkslategray';

             } else {
            $new_row[$key] =  date ("m/d/Y", strtotime($new_row[$key]));
               $color = 'red';
               $cred_expired[] = $key;
             }
    } else {
        $color = 'darkslategray';
    }
           
$trabajador .= "<tr><th id='cpr' class='table_header2'>".strtoupper(str_replace("_", " ", $key))."<td id='cpr2' headers='cpr' style=\"background-color: $color\">" .strtoupper($new_row[$key]). "</td></th></tr>";


}
        $trabajador .="</table>";
        echo $trabajador;
}

    //UNCOMMENT THE FOLLOWING CODE TO BE ABLE TO SEND AUTOMATED EMAILS
    /*if(isset($_GET['email'])){
    if(isset($cred_expired)){
    $new_cred_expired = array_diff($cred_expired, ['90days','annualdays']);
    if(empty($new_cred_expired)){
        $message_email = 'No documents expired for this employee';
    }else{
        $query = http_build_query(array('myArray' => $new_cred_expired));
        $url = urlencode($query);
        echo("<script>location.href = 'send_email.php?cid=$cid&data=$url';</script>");
        
    }
    }else{
   $message_email = 'No documents expired for this employee'; 
    }
        }*/

?>
    </div>

</body>
<script type="text/javascript">
    document.getElementById('message_alert').innerHTML = "<?=isset($message_email)?$message_email:"";?>" ;
    function hideMessage() {
    document.getElementById("message_alert").style.display = "none";
};
    setTimeout(hideMessage, 2000);

    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function(e) {
        if (!confirm('Are you sure you want to delete this employee?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
    
    var elems = document.getElementsByClassName('email_confirmation');
    var confirmIt = function(e) {
        if (!confirm('Are you sure you want to delete this employee?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

</html>
