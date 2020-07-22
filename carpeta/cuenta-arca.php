<?php 
	include 'cn.php';
	
	$sql = "SELECT * FROM arca";

	$resultado=$conexion->query($sql);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cuenta Arca</title>

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
	<h1>Cuenta Arca Distribuciones S.A.</h1>
	
</div>
		<form class="form1" action="insertarArca.php" method="post" autocomplete="on">
            <label for="firstName" class="first-name">fecha:</label>
            <input id="codigo" type="date" name="fecha" value="">

            <label for="lastName" class="last-name">Empresa:</label>
            <input id="descripcion" type="text" name="empresa" value="Arca Distribuciones S.A.">

            <label for="lastName" class="last-name">Factura:</label>
            <input id="descripcion" type="text" name="factura" value="" placeholder="Ej: 100">

            <label for="email">SubTotal:</label>
            <input id="empresa" type="text" name="subtotal" value="">

            <label for="email">Total:</label>
            <input id="empresa" type="text" name="total" value="">
				<!-- Boton de Agregar -->
            <input type="submit" class="btn btn-primary" name="agregar" id="submit" value="Agregar">
        </form>
        <br>
<br>
<br>
<hr>
<br>
<br>

<br>
<br>
<br>
<div id="cuadro" align="center" >
<h2>Cuenta de todo el año de Arca </h2>
<br>
<br>
		<table id="lookup" class="table" width="80%" cellpadding="1" border="2">
			<thead class="thead-light">

				<tr class="centro">
					
					<td scope="col"><b>Fecha</b></td>
					<td scope="col"><b>Empresa</b></td>
					<td scope="col"><b>N° de Factura</b></td>
					<td scope="col"><b>SubTotal</b></td>
					<td scope="col"><b>Total</b></td>
						<!-- Botones -->
					<td scope="col"><b>Modificar</b></td>
					<td scope="col"><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td scope="row"><?php echo $row['fecha']?></td>
						<td scope="row"><?php echo $row['empresa']?></td>
						<td scope="row"><?php echo $row['factura']?></td>
						<td scope="row"><?php echo $row['subtotal']?></td>
						<td scope="row"><?php echo $row['total']?></td>
						
						<!-- Botones Modificar y Eliminar.. -->
						<td scope="row"><a href="modificarArca.php?id=<?php echo $row['id']; ?> " class="btn btn-primary">Modificar</a></td>
						<td scope="row"><a href="eliminar_arca.php" class="btn btn-primary">Eliminar</a></td>
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