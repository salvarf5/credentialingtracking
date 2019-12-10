<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ver trabajadores</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.php" />

</head>

<body>
    <div id="wraper">
        <?php echo "<a class='example_e' href='index.php'>&#8592; Go back!</a>";?>
            <h1 align="center">Active Employees</h1>
            <br />

            <?php
session_start();
?>
                <div id="categorias">
                    <?php
include_once("conexion.php");
$sql = "SELECT * FROM caregiver ORDER BY lastname ASC";
$res = mysqli_query($con, $sql) or die(mysqli_error());
$trabajadores = "";
if (mysqli_num_rows($res) > 0){
    $trabajadores .= "<table width='100%' style='border-collapse: collapse;'>";
    $trabajadores .= "<tr style='background: linear-gradient(to right, #67b26b, #4ca2cb) !important;'><td width='1000' class='table_header'>Name</td><td width='80' align='center' class='table_header'>DOB</td><td width='65' align='center' class='table_header'>Social Security</td><td width='65' align='center' class='table_header'>Email</td></tr>";
    $trabajadores .= "<tr><td colspan='4'><hr/></td></tr>";
    while ($row = mysqli_fetch_assoc($res)){
        $id = $row['caregiver_id'];
        $name = $row['name'];
        $lastname = $row['lastname'];
        $title = strtoupper($row['title']);
        $dob = DATE_FORMAT(new DateTime($row['dob']),'m-d-Y') ;
        $socialsecurity = $row['social'];
        $email = $row['email'];
        $trabajadores .= "<tr><td><a href='vista_trabajador.php?cid=".$id."' onclick='window.open(this.href, width=200,height=100); return false;' class='catlinks'>".$name."  ".$lastname." - ".$title."</a></td><td align='center' class='contar'>" .$dob. "</td><td align='center' class='contar'>".$socialsecurity."</td><td align='center' class='contar'>".$email."</td></tr>";
    $trabajadores .= "<tr><td colspan='4'><hr/></td></tr>";
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