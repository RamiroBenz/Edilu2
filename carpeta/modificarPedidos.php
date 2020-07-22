<?php include 'cn.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Pedido</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estilos1.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<!-- 				Javascript                -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>

<?php include("menu.php"); ?>

	<div align="center">
	<br>
	
	<?php include 'reloj.php'; ?>
	<br>
	<br>
<br><br>
		<h1><u><b>Modificar Pedido</b></u></h1>
	</div>
<br>
<br>
<br>
<div align="center">
<img src="img/Pedidos.jpg" alt="" width="500px">
</div>
<br>
<br>
<br>
<br>
<br>

	<div align="center">
	<?php require('cn.php');
	
		$id = $_REQUEST['id'];
	
		$sql = " SELECT * FROM pedidos WHERE id='$id'";

		$resultado = $conexion->query($sql);

		$row = $resultado->fetch_assoc();

		 ?>


	<form class="form1" action="modificarPed.php?id=<?php echo $row['id']; ?>" method="post">

            <label for="firstName" class="first-name">Pedido:</label>
            <input id="pedido" type="text" name="pedido" value="">

            <label for="lastName" class="last-name">Fecha:</label>
            <input id="fecha" type="date" name="fecha" value="">

            <label for="age">Empresa</label>
            <input id="empresa" type="text" name="empresa" value="">

            <label for="email">Codigo</label>
            <input id="codigo" type="text" name="codigo" value="">

            <label for="lastName" class="last-name">Descripcion:</label>
            <input id="descripcion" type="text" name="descripcion" value="">

			<label for="email">Cantidad</label>
            <input id="cantidad" type="text" name="cantidad" value="">

            <label for="age">Precio</label>
            <input id="precio" type="text" name="precio" value="">

            <label for="age">Subtotal</label>
            <input id="subtotal" type="text" name="subtotal" value="">

            <label for="age">Total</label>
            <input id="total" type="text" name="total" value="">

            <br>

            <input type="submit" class="btn btn-primary" name="" id="submit" value="Agregar">
        </form>

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
	<br>
	<?php include 'footer.php'; ?>
</body>
</html>