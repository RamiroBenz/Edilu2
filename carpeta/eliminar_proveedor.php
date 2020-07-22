<?php
/* PARTE 1: AL INICIO SE EXTRAEN TODAS LAS FILAS */
//Necesitamos establecer una conexión con la base de datos.
$mysql_usuario = "root";
$mysql_password = "root";
$mysql_host = "localhost";
$mysql_database = "edilu1";

//Datos de conexión
$conexion = mysql_connect($mysql_host, $mysql_usuario, $mysql_password, true);

//Seleccionar la base datos y la conexión y capturar posibles errores con die
mysql_select_db($mysql_database, $conexion) || die('No pudo conectarse: '.mysql_error());


//Preparar la consulta para extraer todos los stock
$consulta = "SELECT * FROM Proveedores";
/*$resultado=$conexion->query($consulta);*/
//Ejecutar la consulta
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

//Extraer todas la filas y almacenarlas en una tabla

$table = "<div id='cuadro' align='center' >
      <table id='lookup' class='table table-bordered table-hover' width='85%' border='1' cellpadding='10'>\n";
$table .= "<tr><th>ID</th><th>Empresa</th><th>Direccion</th><th>Localidad</th><th>Telefono</th><th>C.U.I.T.</th><th>E-Mail</th><th>Eliminar</th><th></th></tr>\n";
while($fila = mysql_fetch_assoc($resultado)){
$table .= "<tr>
      <td>".$fila["id"]."</td>
      <td>".$fila["Empresa"]."</td>
      <td>".$fila["Direccion"]."</td>
      <td>".$fila["Localidad"]."</td>
      <td>".$fila["Telefono"]."</td>
      <td>".$fila["cuit"]."</td>
      <td>".$fila["mail"]."</td>
     
      <td><form method='post' action=''> \n
      <input type='hidden' name='id' value='".$fila["id"]."'>
      <input type='submit' class='btn btn-primary'  value='Eliminar'>
      </form></td>
   </tr>\n";
    }
$table .= "</table>\n"; 


/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */

if (isset($_POST["id"]))
{
//Se almacena en una variable el id del registro a eliminar
$id = $_POST["id"];

//Preparar la consulta
$consulta = "DELETE FROM Proveedores WHERE id=$id";

//Ejecutar la consulta
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

//redirigir nuevamente a la página para ver el resultado
header("location: eliminar_proveedor.php");
}
  
?>

<!DOCTYPE HTML>
<html>
<head>
   <meta charset="utf-8">
      <title>Eliminar Registros del Proveedores</title>

   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <link rel="stylesheet" href="estilos.css">
   <link rel="stylesheet" href="estilos1.css">
   <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
   <!--           Javascript                -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</head>
<body>

<?php include 'menu.php'; ?>
<br>
<br>
<?php include 'reloj.php'; ?>
<br>
<br>
<br>
<div align="center">

<h1>Eliminar Proveedor..</h1>
<br>
<br>
<br>
<br>
<img src="img/Proveedor.png" alt="" width="500px">


</div>
<br>
<br>
<br>
<br>
<div align="center">
<?php 

/* Mostrar la tabla con los registros */
echo $table; 

?>
</div>
<br>
<br>
<br>
<br>
<div align="center">
<img src="img/Lola_Morena.jpg" alt="" width="500px">
<br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer.php'; ?>
</body>
</html>

<?php 
/* Cerrar la conexión */
mysqli_close($conexion); 
?>