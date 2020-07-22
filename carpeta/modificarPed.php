<?php 

include 'cn.php';

$id=$_REQUEST['id'];
$pedido = $_POST['pedido'];
$fecha = $_POST['fecha'];
$empresa= $_POST['empresa'];
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad']; 
$precio= $_POST['precio'];
$subtotal= $_POST['subtotal'];
$total= $_POST['total'];


$query = "UPDATE Pedidos SET id='$id', pedido='$ped', fecha='$fecha', empresa='$empresa', Codigo='$codigo', Descripcion='$descripcion', Precio='$precio', Subtotal='$subtotal', Total='$total'  WHERE id='$id'";

//Resultado del proceso
$resultado=$conexion->query($query);

if ($resultado) {

	header("location: pedidos.php");
}else {
	echo "No se ha Modificado nada en la Base de Datos...";
	header("location: buuu.php");
}

 ?>