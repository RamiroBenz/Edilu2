<?php include 'cn.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Empleado</title>


	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estilos1.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<!-- 				Javascript                -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	


</head>
<body>

<?php include("menu.php"); ?>

	<div align="center">
	<br>
	
	<?php include 'reloj.php'; ?>
	<br>
	<br>
<br><br>
		<h1><u><b>Modificar Empleado</b></u></h1>
	</div>
<br>
<br>
<br>
<div align="center">
<img src="img/Clientes.jpg" alt="" width="500px">
</div>
<br>
<br>
<br>
<br>
<br>

	<div align="center">
	<?php 
	
		$id = $_REQUEST['id'];
	
		$sql= " SELECT * FROM empleados WHERE id='$id'";

		$resultado=$conexion->query($sql);

		$row=$resultado->fetch_assoc();

		 ?>


	<form class="form1" action="modificarEmp.php?id=<?php echo $row['id']; ?>" method="post">

            <label for="firstName" class="first-name">Nombre:</label>
            <input id="empresa" type="text" name="nombre" value="<?php echo $row['nombre']; ?>">

            <label for="firstName" class="first-name">Apellido:</label>
            <input id="empresa" type="text" name="apellido" value="<?php echo $row['apellido']; ?>">

            <label for="firstName" class="first-name">Edad:</label>
            <input id="empresa" type="text" name="edad" value="<?php echo $row['edad']; ?>">

            <label for="lastName" class="last-name">Direccion:</label>
            <input id="direccion" type="text" name="direccion" value="<?php echo $row['direccion']; ?>">

           <label for="age">Localidad</label>
            <input id="localidad" type="text" name="localidad" value="<?php echo $row['localidad']; ?>">

            <label for="email">Telefono</label>
            <input id="telefono" type="text" name="telefono" value="<?php echo $row['telefono']; ?>">

            <label for="email">D.N.I.:</label>
            <input id="cuit" type="text" name="dni" value="<?php echo $row['dni']; ?>">

            <label for="email">Fecha:</label>
            <input id="cuit" type="text" name="fecha" value="<?php echo $row['fecha']; ?>">

            <input type="submit" class="btn btn-primary" name="Agregar" id="submit" value="Editar">
        </form>

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