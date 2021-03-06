<?php 
	include 'cn.php';
	$where = "";
	$codigo = "codigo";

	if (!empty($_POST)) {
		$valor = $_POST['codigo'];
		if (!empty($valor)) {
			$where = "WHERE codigo='$codigo'";
		}
	}

	$sql = "SELECT * FROM Stock $where";

	$resultado=$conexion->query($sql);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Stock</title>

	<link rel="icon" type="image/png" href="img/Edilu1.png" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- 				CSS                -->
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estilos1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<!-- 				Javascript                -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<?php include 'menu.php'; ?>
<div align="center">
	<?php include 'reloj.php'; ?>
	<br><br><br>
	<h1>Gestion de Stock</h1>
	
</div>
		<form class="form1" action="insertarStock.php" method="post" autocomplete="on">
            <label for="firstName" class="first-name">Codigo:</label>
            <input id="codigo" type="text" name="codigo" value="">

            <label for="lastName" class="last-name">Descripcion:</label>
            <input id="descripcion" type="text" name="descripcion" value="">

            <label for="age">Precio</label>
            <input id="precio" type="text" name="precio" value="">

            <label for="email">Empresa</label>
            <input id="empresa" type="text" name="empresa" value="">

            <input type="submit" class="btn btn-primary" name="Agregar" id="submit" value="Agregar">
        </form>
        <br>
<br>
<br>
<hr>
<br>
<br>
<div align="right">
<form autocomplete="on" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<h2><u>Buscar</u></h2>
	<label class="first-name" for=""><b>Codigo:</b></label>
	 <input id="codigo" type="text" name="codigo" placeholder="Codigo">
	<input id="submit" type="submit" class="btn btn-primary" name="enviar" value="Buscar">
</form>
</div>
<br>
<br>
<br>
<div id="cuadro" align="center" >
<h2>Lista de Articulos</h2>
<br>
<br>
		<table id="lookup" class="table" width="85%" cellpadding="1" border="2">
			<thead class="thead-light">

				<tr class="centro">
					
					<td scope="col"><b>Codigo</b></td>
					<td scope="col"><b>Descripcion</b></td>
					<td scope="col"><b>Precio</b></td>
					<td scope="col"><b>Empresa</b></td>
					<td scope="col"><b>Modificar</b></td>
					<td scope="col"><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td scope="row"><?php echo $row['Codigo']?></td>
						<td scope="row"><?php echo $row['Descripcion']?></td>
						<td scope="row"><?php echo $row['Precio']?></td>
						<td scope="row"><?php echo $row['Empresa']?></td>
						<!-- Botones Modificar y Eliminar.. -->
						<td scope="row"><a href="modificarStock.php?id=<?php echo $row['id']; ?> " class="btn btn-primary">Modificar</a></td>
						<td scope="row"><a href="eliminar_stock.php" class="btn btn-primary">Eliminar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</thead>
		</table>
	</div>	

<br>
<br>
<br>
<br>
<div align="center">
      <img src="img/Lola_Morena.jpg" alt="" width="400">

   </div>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer.php'; ?>	
</body>
</html>