<?php 

include 'cn.php';


$id=$_REQUEST['id'];
$empresa = $_POST['empresa'];
$direccion = $_POST['direccion'];
$localidad= $_POST['localidad']; 
$telefono= $_POST['telefono'];
$cuit= $_POST['cuit'];
$mail= $_POST['mail'];

$query = "UPDATE Proveedores SET id='$id', Empresa='$empresa', Direccion='$Direccion', Localidad='$localidad', Telefono='$telefono', cuit='$cuit', mail='mail' WHERE id='$id'";

//Resultado del proceso

$resultado=$conexion->query($query);

if ($resultado) {

	header("location: Proveedores.php");

}else {

	echo "No se ha Modificado nada en la Base de Datos...";
}

 ?>