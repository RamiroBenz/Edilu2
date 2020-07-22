<?php 

	include 'cn.php';

	//Recibir datos

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$edad = $_POST["edad"];
	$direccion = $_POST["direccion"];
	$localidad = $_POST["localidad"];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$fecha = $_POST["fecha"];

	//Consulta para insertar datos

	$sql = "INSERT INTO empleados (nombre, apellido, edad, direccion, localidad, dni, telefono, fecha) values ('$nombre', '$apellido', '$edad', '$direccion', '$localidad', '$dni', '$telefono', '$fecha')";

	//Ejecutar consulta
	$resultado = mysqli_query($conexion, $sql);

	if (!$resultado) {

		echo 'Error al cargarse el este empleado..';

	}else {

		header("location: empleados.php");
	}

	//Cerrar Conexion
	mysqli_close($conexion);


 ?>