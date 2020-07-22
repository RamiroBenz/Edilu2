<?php 
	include 'cn.php';

	$sql= "SELECT * FROM Clientes";

	$resultado=$conexion->query($sql);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estilos1.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" type="image/png" href="img/Edilu1.png"/>

	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<!-- 				Javascript                -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>

<br>
<?php include 'menu.php'; ?>
<div align="center">
	<br>
	
	<?php include 'reloj.php'; ?>
	<br>
	<br>
	<br><br>
	<h1>Clientes</h1>
	
</div>
<br>
<br>
<div align="center">
<img src="img/Clientes.jpg" alt="" width="500px">
</div>
<br>
<br>
<br>
	 <form class="form1" action="insertarCliente.php" method="post" autocomplete="on">
            <label for="firstName" class="first-name">Empresa:</label>
            <input id="empresa" type="text" name="empresa" value="">

            <label for="lastName" class="last-name">Direccion:</label>
            <input id="direccion" type="text" name="direccion" value="">

           <!--  <label for="job">Job</label>
           <input id="job" type="text"> -->

            <label for="age">Localidad</label>
            <input id="localidad" type="text" name="localidad" value="">

            <label for="email">Telefono</label>
            <input id="telefono" type="text" name="telefono" value="">
            <label for="email">C.U.I.T.</label>
            <input id="cuit" type="text" name="cuit" value="">

            <input type="submit" class="btn btn-primary" name="Agregar" id="submit" value="Agregar">
        </form>
        <br>
<br>
<br>
<br>
<hr>
<br>
<br>
<div id="cuadro" align="center" >
		<table id="lookup" class="table" width="85%" cellpadding="1" border="2">
			<thead class="thead-light">

				<tr class="centro">
					
					<td scope="col"><b>Empresa</b></td>
					<td scope="col"><b>Direccion</b></td>
					<td scope="col"><b>Localidad</b></td>
					<td scope="col"><b>Telefono</b></td>
					<td scope="col"><b>C.U.I.T.</b></td>
					<td scope="col"><b>Modificar</b></td>
					<td scope="col"><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td scope="row"><?php echo $row['Empresa']?></td>
						<td scope="row"><?php echo $row['Direccion']?></td>
						<td scope="row"><?php echo $row['Localidad']?></td>
						<td scope="row"><?php echo $row['Telefono']?></td>
						<td scope="row"><?php echo $row['cuit']?></td>
						<!-- Botones Modificar y Eliminar.. -->
						<td scope="row"><a href="modificarCliente.php?id=<?php echo $row['id']; ?> " class="btn btn-primary">Modificar</a></td>
						<td scope="row"><a href="eliminar_cliente.php" class="btn btn-primary">Eliminar</a></td>
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
<br>
<br>
<div align="center">
<img src="img/Lola_Morena.jpg" alt="" width="500">
</div>
<br>
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