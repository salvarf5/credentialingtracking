<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ver trabajadores</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.php" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="wraper">
        <?php echo "<a class='example_e' href='buscar_trabajador.php'>&#8592; Go back!</a>";?>
            <a href="index.php">
                <button class="btn" style="cursor:pointer;" title="Return to Homepage"><i class="fa fa-home"></i></button>
            </a>

            <?php
session_start();
    include_once('conexion.php');
    require_once('validaciones.php');   
	if(isset($_POST['buscar_trabajador'])){
        $search = mysqli_real_escape_string($con, $_POST['campobuscar']);
        $search2 = mysqli_real_escape_string($con, $_POST['campobuscarfechana']);
        $sql = "SELECT * from caregiver WHERE name = '$search' OR lastname = '$search' OR dob ='$search2'";
        $res = mysqli_query($con, $sql);
        $queryResult = mysqli_num_rows($res);
        $trabajadores = "";
        if ($queryResult > 0){
            $trabajadores .= "<table width='100%' style='border-collapse: collapse;'>";
            $trabajadores .= "<tr style='background: linear-gradient(to right, #67b26b, #4ca2cb) !important;'><td width='1000' class='table_header'>Name</td><td width='80' align='center' class='table_header'>DOB</td><td width='65' align='center' class='table_header'>Social Security</td><td width='65' align='center' class='table_header'>Email</td></tr>";
            $trabajadores .= "<tr><td colspan='4'><hr/></td></tr>";
            while($row = mysqli_fetch_assoc($res)){
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
            echo "<b style='color: white'>Results: ".$queryResult."</b>";
        }else{
            echo "<p style='color:white;padding-top:25px;text-align:center;'>No results found</p>";
        }
    }

?>
    </div>
</body>

</html>
