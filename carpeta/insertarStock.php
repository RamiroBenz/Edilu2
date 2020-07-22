<?php 

	include 'cn.php';

	//Recibir datos


	$codigo = $_POST["codigo"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	$empresa = $_POST["empresa"];

	//Consulta para insertar datos

	$sql = "INSERT INTO stock (Codigo, Descripcion, Precio, Empresa) values ('$codigo', '$descripcion', '$precio', '$empresa')";

	//Ejecutar consulta
	$resultado = mysqli_query($conexion, $sql);

	if (!$resultado) {

		echo 'Error al cargarse el articulo..';

	}else {

		header("location: stock.php");
	}
	//Cerrar Conexion
	mysqli_close($conexion);

 ?>