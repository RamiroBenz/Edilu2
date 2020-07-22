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
<style>
	 td {
		padding-right: 20px;
	}
	img {
		border-radius: 15px;
	}

</style>
</head>
<body>
<?php include 'menu.php'; ?>
<div align="center">
<h1>Arca Distribuciones S.A.</h1>
<br>
<br>
<br>
	<?php include 'reloj.php'; ?>
	<br><br><br><br>
	<h2>Comprobantes</h2>
	
	
</div>

<div align="center" style="margin: 50px; margin-right: 80px; padding-left: 100px; padding-top: 70px;">
	<table>
		<tr>
			<td>
				<a href="remitos/remN_Arca.php"><img src="img/remitos.png" alt="" width="100%"></a><br><article style="padding-left: 30px;"> <b>   Remitos</b></article></td>

			<td>
				<a href="facturas/"><img src="img/factura.jpg" alt="" width="30%"></a><br><article style="padding-left: 60px;"> <b>   Facturas</b></article></td>
			<!-- <td><img src="img/Edilu1.png" alt=""></td> -->	

			<td>
				<a href="nc/"><img src="img/nc.jpg" alt="" width="80%"></a><br><article style="padding-left: 7px;"><b>Nota de Credito</b></article></td>
			<td>
				<a href="nd/"><img src="img/nd.jpg" alt="" width="30%"></a><br><article><b>Nota de Debito</b></article></td>
		</tr>
    <br>
    </table>
</div>



<br>
<br>

<br>
<hr>
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