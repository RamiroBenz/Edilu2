<?php 
	include 'cn.php';

	$sql= "SELECT * FROM pedidos";

	$resultado=$conexion->query($sql);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pedidos</title>
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

<br>
<?php include 'menu.php'; ?>
<div align="center">
	<br>
	
	<?php include 'reloj.php'; ?>
	<br>
	<br>
	<br><br>
	<h1>Gestion de Pedidos</h1>
	
</div>
<br>
<br>
	 <form class="form1" action="insertarPedido.php" method="post">

            <label for="firstName" class="first-name">Num.Pedido:</label>
            <input id="pedido" type="text" name="pedido" value="">

            <label for="lastName" class="last-name">Fecha:</label>
            <input id="fecha" type="text" name="fecha" value="<?php echo date ('d/m/Y'); ?>">

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

            <label for="age">IVA</label>
            <input id="iva" type="hidden" name="iva" value="">

            <label for="age">Subtotal</label>
            <input id="subtotal" type="hidden" name="subtotal" value="">

            <label for="age">Total</label>
            <input id="total" type="hidden" name="total" value="">

            <br>

            <input type="submit"  class="btn btn-primary" name="submit" id="submit" value="Agregar" onclick="enviar();">
        </form>
        <br>
<br>
<br>
<br>
<br>
<br>
<div id="cuadro" align="center" >
		<table id="lookup" class="table" width="85%" cellpadding="1" border="2">
			<thead class="thead-light">

				<tr class="centro">
					
					<td scope="col"><b>Pedido</b></td>
					<td scope="col"><b>Fecha</b></td>
					<td scope="col"><b>Empresa</b></td>
					<td scope="col"><b>Codigo</b></td>
					<td scope="col"><b>Descripcion</b></td>
					<td scope="col"><b>Cantidad</b></td>
					<td scope="col"><b>Precio</b></td>
					<td scope="col"><b>Subtotal</b></td>
					<td scope="col"><b>Total</b></td>
					<!-- 	Botones		 -->
					<td scope="col"><b>Modificar</b></td>
					<td scope="col"><b>Eliminar</b></td>
				</tr>
			<tbody>
				<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td scope="row"><?php echo $row['pedido']?></td>
						<td scope="row"><?php echo $row['fecha']?></td>
						<td scope="row"><?php echo $row['empresa']?></td>
						<td scope="row"><?php echo $row['Codigo']?></td>
						<td scope="row"><?php echo $row['Descripcion']?></td>
						<td scope="row"><?php echo $row['Cantidad']?></td>
						<td scope="row"><?php echo $row['Precio']?></td>
						<td scope="row"><?php echo $row['Subtotal']?></td>
						<td scope="row"><?php echo $row['Total']?></td>
						<!-- 	Botones		 -->
						<td scope="row"><a href="modificarPed.php?id=<?php echo $row['id']; ?> "  class="btn btn-primary">Modificar</a></td>
						<td scope="row"><a href="vista_pedidos.php"  class="btn btn-primary">Eliminar</a></td>
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
<script>
function enviar(cantidad,precio,subtotal,total){

	var cantidad = parseFloat(document.getElementById("cantidad").value);
	var precio = parseFloat(document.getElementById("precio").value);
	var subtotal = parseFloat(document.getElementById("Subtotal").value);
	var total = parseFloat(document.getElementById("total").value);

	subtotal = cantidad*precio;
	subtotal = total;

	}
</script>
<?php include 'footer.php'; ?>	
</body>
</html>