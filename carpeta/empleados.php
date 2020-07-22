<?php 
	include 'cn.php';
	
	$sql = "SELECT * FROM empleados";

	$resultado=$conexion->query($sql);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Empleados de la empresa</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- 				CSS                -->
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estilos1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<!-- 				Javascript                -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<?php include 'menu.php'; ?>
<div align="center">
	<?php include 'reloj.php'; ?>
	<br><br><br>
	<h1>Agregar Empleado</h1>
	
</div>
		<form class="form1" action="insertarEmpleado.php" method="post" autocomplete="on">
            <label for="firstName" class="first-name">Nombre:</label>
            <input id="codigo" type="text" name="nombre" value="">

            <label for="lastName" class="last-name">Apellido:</label>
            <input id="descripcion" type="text" name="apellido" value="">

            <label for="email">Direccion:</label>
            <input id="empresa" type="text" name="direccion" value="">

            <label for="email">Localidad:</label>
            <input id="empresa" type="text" name="localidad" value="">

            <label for="age">D.N.I.:</label>
            <input id="precio" type="number" name="dni" value="">

            <label for="email">Telefono:</label>
            <input id="empresa" type="number" name="telefono" value="">

            <label for="email">Fecha:</label>
            <input id="empresa" type="text" name="fecha" value="<?php echo date('d/m/y'); ?>">

            <input type="submit" class="btn btn-primary" name="agregar" id="submit" value="Agregar">
        </form>
        <br>
<br>
<br>
<hr>
<br>
<br>

<br>
<br>
<br>
<div id="cuadro" align="center" >
<h2>Lista de Empleados</h2>
<br>
<br>
		<table id="lookup" class="table" width="80%" cellpadding="1" border="2">
			<thead class="thead-light">

				<tr class="centro">
					
					<td scope="col"><b>Nombre</b></td>
					<td scope="col"><b>Apellido</b></td>
					<td scope="col"><b>Direccion</b></td>
					<td scope="col"><b>Localidad</b></td>
					<td scope="col"><b>dni</b></td>
					<td scope="col"><b>Telefono</b></td>
					<td scope="col"><b>Fecha</b></td>
					
					<!-- Botones - Modificar y Eliminar -->
					<td scope="col"><b>Modificar</b></td>
					<td scope="col"><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td scope="row"><?php echo $row['nombre']?></td>
						<td scope="row"><?php echo $row['apellido']?></td>
						<td scope="row"><?php echo $row['direccion']?></td>
						<td scope="row"><?php echo $row['localidad']?></td>
						<td scope="row"><?php echo $row['dni']?></td>
						<td scope="row"><?php echo $row['telefono']?></td>
						<td scope="row"><?php echo $row['fecha']?></td>

						<!-- Botones Modificar y Eliminar.. -->
						<td scope="row"><a href="modificarEmpleado.php?id=<?php echo $row['id']; ?> " class="btn btn-primary">Modificar</a></td>
						<td scope="row"><a href="eliminar_empleado.php" class="btn btn-primary">Eliminar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</thead>
		</table>
	</div>	

<br>
<br>
<br>
<br>
<div align="center">
      <img src="img/Lola_Morena.jpg" alt="" width="400">

   </div>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer.php'; ?>	
</body>
</html>