<?php 

	include '../cn.php';

	//Recibir datos
	
	$empresa = $_POST["empresa"];
	$dire = $_POST["direccion"];
	$loc = $_POST["localidad"];
	$tel = $_POST["telefono"];
	$cuit = $_POST["cuit"];
	$mail = $_POST["mail"];

	//Consulta para insertar datos

	$sql = "INSERT INTO proveedores (Empresa, Direccion, Localidad, Telefono, cuit, mail) values ('$empresa', '$dire', '$loc', '$tel', '$cuit', '$mail')";

	//Ejecutar consulta
	$resultado = mysqli_query($conexion, $sql);

	if (!$resultado) {

		echo 'Error al cargarse el articulo..';

	}else {

		header("location: proveedores.php");
	}
	//Cerrar Conexion
	mysqli_close($conexion);

 ?>