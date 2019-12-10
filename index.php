<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="fuentes.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Trabajadores</title>
    <meta name="description" content="Entra en Patamania, tu tienda de animales online especializada en la venta de productos y accesorios para mascotas. Gastos de envio gratis. Encontrar&aacute;s desde ropa, juguetes, accesorios para el paseo y muchas cosas mas para tu mascota.">
</head>

<body>
    <?php
session_start();
    ?>
        <header>
            <?php
if (isset($_GET['status'])){
        if ($_GET['status'] == 'reg_success'){
        echo "<script>alert('Trabajador creado con exito..')</script>";
        }else if ($_GET['status'] == 'cambiado'){
        echo "<script>alert('Contraseña cambiada con exito.')</script>";
        }
        }

            ?>
        </header>
        <div class="container">
            <h2>CREDENTIAL TRACKING</h2>
            <div class="button_cont" align="center"><a class="example_f" href="ver_trabajadores.php" rel="nofollow"><span>Active Employees</span></a></div>
            <div class="button_cont" align="center"><a class="example_f2" href="crear_trabajador.php" rel="nofollow"><span>Add New Employee</span></a></div>
            <div class="button_cont" align="center"><a class="example_f3" href="buscar_trabajador.php" rel="nofollow"><span>Search Employee</span></a></div>
        </div>

</body>

</html>