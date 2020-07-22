<?php 

	include 'cn.php';

	//Recibir datos

	$empresa = $_POST["empresa"];
	$dir = $_POST["direccion"];
	$loc = $_POST["localidad"];
	$tel = $_POST["telefono"];
	$cuit = $_POST["cuit"];

	//Consulta para insertar datos

	$sql = "INSERT INTO clientes (Empresa, Direccion, Localidad, Telefono, cuit) values ('$empresa', '$dir', '$loc', '$tel', $cuit)";

	//Ejecutar consulta
	$resultado = mysqli_query($conexion, $sql);

	if (!$resultado) {

		echo 'Error al cargarse el articulo..';

	}else {

		header("location: clientes.php");
	}
	//Cerrar Conexion
	mysqli_close($conexion);

 ?>