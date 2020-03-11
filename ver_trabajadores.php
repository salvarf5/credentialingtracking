<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ver trabajadores</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.php" />
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="js/sorttable.js"></script>
    <style>
.dot {
  height: 10px;
  width: 10px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
}
        
        table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: default;
}
        .table_header{
            cursor: pointer;
        }
</style>
</head>

<body>
    <div id="wraper">
        <?php echo "<a class='example_e' href='index.php'>&#8592; Go back!</a>";?>
            <h1 align="center">Active Employees</h1>
            <br />

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
                <div id="categorias">
                    <?php
include_once("conexion.php");
$sql = "SELECT * FROM caregiver ORDER BY lastname ASC";
$res = mysqli_query($con, $sql) or die(mysqli_error());
$trabajadores = "";
if (mysqli_num_rows($res) > 0){
    $trabajadores .= "<table class='sortable' width='100%' style='border-collapse: collapse;'>";
    $trabajadores .= "<tr style='background: linear-gradient(to right, #67b26b, #4ca2cb) !important;'><th width='1000' align='left' class='table_header' title='click column header to sort table'>Name</td><th width='80' align='center' class='table_header' title='click column header to sort table'>DOB</th><th width='65' align='center' class='table_header' title='click column header to sort table'>Social Security</th><th width='65' align='center' class='table_header' title='click column header to sort table'>Email</th></tr>";

    $todays_date = date("Y-m-d");
    
    
    while ($row = mysqli_fetch_assoc($res)){
        $id = $row['caregiver_id'];
        $name = $row['name'];
        $lastname = $row['lastname'];
        $title = strtoupper($row['title']);
        $dob = DATE_FORMAT(new DateTime($row['dob']),'m/d/Y') ;
        $socialsecurity = $row['social'];
        $email = $row['email'];
        foreach ($row as $key => $value) {
            if(convertDate($row[$key]) && $key != 'dob' && $row[$key] != '0000-00-00'){
        if ($row[$key] < $todays_date) {
            $row['expired'] = '<span  class="dot" title="this employee has credential(s) expired"></span>';
             } 
        }
       
         }
   
        
        $trabajadores .= "<tr><td><a href='vista_trabajador.php?cid=".$id."' onclick='window.open(this.href, width=200,height=100); return false;' class='catlinks'>".strtoupper($row['name'])."  ".strtoupper($row['lastname'])." - ".strtoupper($row['title'])." ".$row['expired']."</a></td><td align='center' class='contar'>" .$dob. "</td><td align='center' class='contar'>".$socialsecurity."</td><td align='center' class='contar'>".strtoupper($email)."</td></tr>";
    
    
         }
   $trabajadores .="</table>";
    echo $trabajadores;
       
}else {
    echo "<p> No employees to display";
}
?>

                </div>
    </div>
</body>

</html>