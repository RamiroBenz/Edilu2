<?php 

include 'cn.php';


$id=$_REQUEST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$dir = $_POST['direccion'];
$loc= $_POST['localidad']; 
$tel= $_POST['telefono'];
$dni= $_POST['dni'];
$fecha = $_POST['fecha'];

$query = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', edad='$edad', direccion='$dir', localidad='$loc', telefono='$tel', dni='$dni', fecha='$fecha' WHERE id='$id'";
//Resultado del proceso
$resultado=$conexion->query($query);

if ($resultado) {

	header("location: empleados.php");

}else {

	echo "No se ha Modificado nada en la Base de Datos...";
}

 ?>