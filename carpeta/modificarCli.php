<?php 

include 'cn.php';


$id=$_REQUEST['id'];
$empresa = $_POST['empresa'];
$dir = $_POST['direccion'];
$loc= $_POST['localidad']; 
$tel= $_POST['telefono'];
$cuit= $_POST['cuit'];

$query = "UPDATE Clientes SET Empresa='$empresa', Direccion='$dir', Localidad='$loc', Telefono='$tel', cuit='$cuit' WHERE id='$id'";
//Resultado del proceso
$resultado=$conexion->query($query);

if ($resultado) {

	header("location: clientes.php");

}else {

	echo "No se ha Modificado nada en la Base de Datos...";
}

 ?>