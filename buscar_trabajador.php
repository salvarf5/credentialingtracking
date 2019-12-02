<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Caregiver - Buscar Trabajador</title>
  <link rel="stylesheet" type="text/css" href="estilos/style.php"/>
</head>
	
	<body>
		<div id="wraper">
            <?php echo "<a class='example_e' href='index.php'>&#8592; Go back!</a>";?>

<?php
$campobusqueda = "";

?>
<hr />
<br />
<br />
<br />
<div id="contenido">
<div id="encabezadoreg">
<h3>SEARCH EMPLOYEE</h3>
<hr />
</div>

<form action="buscar_trabajador_parse.php" method="post">
<p>Name, Last name </p>
<input type="text" name="campobuscar" class="entradas" value="<?php echo $campobusqueda ?>" autocomplete="off"/>
<p>or DOB: </p>
<input type="date" name="campobuscarfechana" class="entradas" value="<?php echo $campobusqueda2 ?>" autocomplete="off"/>
<br />
<input type="hidden" name="buscar"  value="1"/>
<input type="submit" name="buscar_trabajador" class="entradas" value="Search"/>
</form>
</div>
</div>
</body>
</html>