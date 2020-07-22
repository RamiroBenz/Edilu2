<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pre-Factura3</title>
	<style>
		* {
	  box-sizing: border-box;
	}
	body {
	  background: #333;
	  color: white;
	  font-family: sans-serif;
	}

	form {
	  width: 500px;
	  margin: auto;
	  background: #555;
	  padding: 20px;
	  margin-top: 20px;
	}
	h1 {
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
	</style>
</head>
<body>

<form action="factBlanca.php" method="post" name="formCliente">
		<h1>Fecha Factura </h1>
			<label for="">Fecha</label>
			<input type="text" name="fecha" value="<?php echo date('d-m-y') ?>">
			
			<label for="">Numero de Factura</label>
			<input type="text" name="numFact">

		
	      <h1>Cliente</h1>
	      <!--  -->
	      <label for="">Cliente: </label>
	      <input type="text" name="cliente">
	        
	      <label for="">Direccion: </label>
	      <input type="text" name="direccion">

	      <label for="">Iva: </label>
	      <input type="text" name="iva">

	      <label for="">Localidad: </label>
	      <input type="text" name="localidad">

	      <label for="">Provincia: </label>
	      <input type="text" name="provincia">

	      <label for="">C.U.I.T.: </label>
	      <input type="text" name="cuit">

	      <input type="submit" value="Enviar Datos-->">
    </form>
	
</body>
</html>