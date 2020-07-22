<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pre-Factura</title>
	<?php include 'head.php'; ?>

	<style>
	

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
	  width: 35%;
	  margin: auto;
	  background: #333;
	  color: white;
	  border: none;
	  cursor: pointer;
	}
	</style>
</head>
<body>
<?php include 'menu.php'; ?>
 <div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <ol class="breadcrumb pull-right">
            <li><a href="index.php" style="color: #7d0505;">Edilu S.R.L.</a></li>
            <li class="active">Inventario</li>
        </ol>
    </div>
</div>
<!-- Page-Title -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            
              <h3 class="panel-title">Inventario</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
<form action="factN.php" method="post" name="formCliente">


		<h2>Numero de Factura</h2>
		
		<!-- numero de Factura para el comprobante sin IVA -->
		<label for="">NumFact: </label>
      	<input type="text" name="numFact" autocomplete="on">

      	<!-- <label for="">Fecha</label>
      	<input type="date" name="fecha" autocomplete="on"> -->
	      <h2>Cliente</h2>
	      <br>
	      <br>
	      <!-- Llenar planilla para clientes.. -->
	      <label for="">Cliente: </label>
	      <input type="text" name="empresa" autocomplete="on">
	        
	      <label for="">Direccion: </label>
	      <input type="text" name="direccion" autocomplete="on">

	      <label for="">Iva: </label>
	      <input type="text" name="iva" autocomplete="on">

	      <label for="">Localidad: </label>
	      <input type="text" name="localidad" autocomplete="on">

	      <label for="">Provincia: </label>
	      <input type="text" name="provincia" autocomplete="on">

	      <label for="">C.U.I.T.: </label>
	      <input type="text" name="cuit" autocomplete="on">
		<!-- <hr>
			      <label for="">O/C N°: </label>
			      <input type="text" name="ocompra" autocomplete="on">
		
			      <label for="">Campaña N°: </label>
			      <input type="text" name="camp" autocomplete="on"> -->

      <input type="submit" value="Enviar Datos-->">
    </form>
    
	<!-- <footer class="footer text-right">
	        R&B Design Web&copy <?php echo date('Y'); ?>
	    </footer> -->
</body>
</html>