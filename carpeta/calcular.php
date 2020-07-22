<?php 

	include 'cn.php';

	
	$codigo = $_POST['codigo'];
	$desc = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$porcentaje = $_POST['porcentaje'];
	$total = $precio * $porcentaje;


$query = "UPDATE Stock SET Codigo='$codigo', Descripcion='$desc', Precio='$precio',  WHERE id='$id'";
	//Resultado del proceso
	$resultado=$conexion->query($query);

if ($resultado) {
	echo "Se ha modificado el precio"; 
	

}else {

	echo "No se ha Modificado nada en la Base de Datos...";
}

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sacar Precio</title>

	<style>
		* {
		  box-sizing: border-box;
		}
		body {
		  background: #333;
		  color: white;
		  font-family: sans-serif, helvetica;
		}

		form {
		  width: 800px;
		  margin: auto;
		  background: #555;
		  padding: 20px;
		  margin-top: 20px;
		}
		h1 h2 {
		  text-align: center;
		  margin-bottom: 20px;
		  margin-top: 0;
		}
		label, input,select {
		  width: 100%;
		  display: block;
		  font-size: 1.2em;
		}
		input, select {
		  padding: 5px;
		  margin-bottom: 20px;
		}
		input[type="submit"] {
		  width: 30%;
		  margin: auto;
		  background: #333;
		  color: white;
		  border: none;
		  cursor: pointer;
		}
		button {
			width: 20%;
			height: 20px;
		  margin: auto;
		  background: #333;
		  color: white;
		  border: none;
		  cursor: pointer;
		}
		p {
			font-size: 20px;
			font-weight: bold;

		}
	</style>
</head>
<body>

<form action="sacarPrecio.php">

	
	<label for="">Descripcion: </label>
	<input type="text" value="<?php  echo $row['Codigo']; ?>">
	


	<label for="">Descripcion: </label>
	
		<input type="text" name="descripcion" value=" <?php echo $row['Descripcion']; ?> ">

	<br>
	
	
	<label for="">Precio Viejo</label>
	<input type="text" name="precio" value="<?php echo $precio; ?>">
	<br>
	

	<p><u>Sacar Precio Nuevo Segun el porcentaje que haya agregado</u></p>
	<br>
	<br>
	
	<label for="">El Precio nuevo es: </label>
      <h2> <?php echo $total; ?> </h2>
		<div align="right">
      <button><a href="sacarPrecio.php"></a>Atras</button>
      </div>
      </form>
</body>
</html>