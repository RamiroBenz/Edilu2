<?php 

include '../cn.php';


$id=$_REQUEST['id'];
$cod = $_POST['codigo'];
$desc = $_POST['descripcion'];
$precio= $_POST['precio']; 
$empresa= $_POST['empresa'];

$query = "UPDATE Stock SET codigo='$cod', descripcion='$desc', precio='$precio', empresa='$empresa' WHERE id='$id'";
//Resultado del proceso
$resultado=$conexion->query($query);

if ($resultado) {
	header("location: ../productos.php");
}else {
	echo "No se ha Modificado nada en la Base de Datos...";
}

 ?>