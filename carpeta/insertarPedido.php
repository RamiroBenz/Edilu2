<?php 

	include 'cn.php';

	//Recibir datos

	$pedido = $_POST["pedido"];
	$fecha = $_POST["fecha"];
	$empresa = $_POST["empresa"];
	$codigo = $_POST["codigo"];
	$descripcion = $_POST["descripcion"];
	$cantidad = $_POST["cantidad"];
	$precio = $_POST["precio"];
	$subtotal = $_POST["subtotal"];
	$total = $_POST["total"];

	//Consulta para insertar datos

	$sql = "INSERT INTO Pedido (pedido, fecha, empresa, Codigo, Descripcion, Cantidad, Precio, Subtotal, Total) VALUES ('$pedido', '$fecha', '$empresa', '$codigo', '$descripcion', '$cantidad', '$precio', '$subtotal', '$total')";

	//Ejecutar consulta
	$resultado = mysqli_query($conexion, $sql);

	if (!$resultado) {

		echo 'Error al cargarse el Pedido..';
		header("location: Buuu.php");

	}else {

		header("location: pedidos.php");
	}

	//Cerrar Conexion
	mysqli_close($conexion);

 ?>