<?php 
	include 'cn.php';

	$sql= "SELECT * FROM Proveedores";

	$resultado=$conexion->query($sql);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proveedores</title>

	
		<?php include 'head.php'; ?>
                <style>
        

.responsive-table {
  width: 100%;
  margin-bottom: 1.5em;
}
.responsive-table thead {
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
.responsive-table thead th {
  background-color: #1d96b2;
  border: 1px solid #1d96b2;
  font-weight: normal;
  text-align: center;
  color: white;
}
.responsive-table thead th:first-of-type {
  text-align: left;
}
.responsive-table tbody,
.responsive-table tr,
.responsive-table th,
.responsive-table td {
  display: block;
  padding: 0;
  text-align: left;
  white-space: normal;
}
.responsive-table th,
.responsive-table td {
  padding: .5em;
  vertical-align: middle;
}
.responsive-table caption {
  margin-bottom: 1em;
  font-size: 1em;
  font-weight: bold;
  text-align: center;
}
.responsive-table tfoot {
  font-size: .8em;
  font-style: italic;
}
.responsive-table tbody tr {
  margin-bottom: 1em;
  border: 2px solid #1d96b2;
}
.responsive-table tbody tr:last-of-type {
  margin-bottom: 0;
}
.responsive-table tbody th[scope="row"] {
  background-color: #1d96b2;
  color: white;
}
.responsive-table tbody td[data-type=currency] {
  text-align: right;
}
.responsive-table tbody td[data-title]:before {
  content: attr(data-title);
  float: left;
  font-size: .8em;
  color: rgba(94, 93, 82, 0.75);
}
.responsive-table tbody td {
  text-align: right;
  border-bottom: 1px solid #1d96b2;
}


@media (min-width: 52em) {
  .responsive-table {
    font-size: .9em;
  }
  .responsive-table thead {
    position: relative;
    clip: auto;
    height: auto;
    width: auto;
    overflow: auto;
  }
  .responsive-table tr {
    display: table-row;
  }
  .responsive-table th,
  .responsive-table td {
    display: table-cell;
    padding: .5em;
  }

  .responsive-table caption {
    font-size: 1.5em;
  }
  .responsive-table tbody {
    display: table-row-group;
  }
  .responsive-table tbody tr {
    display: table-row;
    border-width: 1px;
  }
  .responsive-table tbody tr:nth-of-type(even) {
    background-color: rgba(94, 93, 82, 0.1);
  }
  .responsive-table tbody th[scope="row"] {
    background-color: transparent;
    color: #5e5d52;
    text-align: left;
  }
  .responsive-table tbody td {
    text-align: center;
  }
  .responsive-table tbody td[data-title]:before {
    content: none;
  }
}
@media (min-width: 62em) {
  .responsive-table {
    font-size: 1em;
  }
  .responsive-table th,
  .responsive-table td {
    padding: .75em .5em;
  }
  .responsive-table tfoot {
    font-size: .9em;
  }
}

@media (min-width: 75em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em;
  }
}

    </style>

</head>
<body class="fixed-left" style="height: 100%;">
    
            <!-- Fin del Menu.. -->
<?php include 'menu.php'; ?>
            <!-- Fin del Menu.. -->

<div align="center" style="margin-top: 100px;">
      <img src="assets/images/LolaMorena.jpg" alt="" width="200" style="border-radius: 15px; ">

 

	
	<?php
	 require('cn.php');
	
		

		 ?>

<div class="panel-body">
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          
	
	
	<h2 style="color:#7d0505;"><?php echo date('d/m/Y'); ?>
		
	</h2>
	
	<h1>Proveedores</h1>
	
</div>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.php">Edilu S.R.L.</a></li>
                        <li class="active">Proveedores</li>
                    </ol>
                </div>
            </div>
		  <form class="form-horizontal" role="form" action="carpeta/insertarProveedor.php" method="post" autocomplete="on">
		      <div class="form-group">
		          <label class="col-md-2 control-label">Empresa</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="empresa" placeholder="Empresa">
		          </div>
		      </div>
		    
		      
		      <div class="form-group">
		          <label class="col-md-2 control-label">Dirección</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="direccion" placeholder="Dirección">
		          </div>
		      </div>
		      <div class="form-group">
		          <label class="col-md-2 control-label">Localidad</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="localidad" placeholder="Localidad">
		          </div>
		      </div>

		      <div class="form-group">
		          <label class="col-md-2 control-label">Telefono</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="telefono" placeholder="Telefono">
		          </div>
		      </div>

		      <div class="form-group">
		          <label class="col-md-2 control-label">C.U.I.T.</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="cuit" placeholder="C.U.I.T.">
		          </div>
		      </div>

		      <div class="form-group">
		          <label class="col-md-2 control-label">E-Mail</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="mail" placeholder="E-Mail">
		          </div>
		      </div>


		       <div class="form-group" align="center">
				  <a href="../productos.php"><button type="button" class="btn btn-danger btn-custom waves-effect waves-light m-b-5 control-label col-md-3 col-md-offset-2">Cancelar</button></a>

				  <input type="submit" class="btn btn-success btn-custom" value="Guardar" style="margin-left: 10px; width: 25%;">

			   </div>
  		</form>
  <br>
  <div class="panel-body">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="responsive-table">
                    <caption> Proveedores: Edilu S.R.L.</caption>
                        <thead class="thead-light">
                            <tr class="centro">
              					<th scope="col"><b>Empresa</b></th>
              					<th scope="col"><b>Direccion</b></th>
              					<th scope="col"><b>Localidad</b></th>
              					<th scope="col"><b>Telefono</b></th>
              					<th scope="col"><b>C.U.I.T.</b></th>
              					<th scope="col"><b>E-Mail</b></th>
              					<th scope="col"><b>Modificar</b></th>
              					<th scope="col"><b>Eliminar</b></th>
              				</tr>
              				<tbody>
              					<?php while($row=$resultado->fetch_assoc()){ ?>
              					<tr>
              						
              						<th scope="row"><?php echo $row['Empresa']; ?></th>
              						<td data-title="Released"><?php echo $row['Direccion']; ?></td>
              						<td data-title="Released"><?php echo $row['Localidad']; ?></td>
              						<td data-title="Released"><?php echo $row['Telefono']; ?></td>
              						<td data-title="Released"><?php echo $row['cuit']; ?></td>
              						<td data-title="Released"><?php echo $row['mail']; ?></td>
              						
              						<!-- Botones Modificar y Eliminar.. -->
              						<td data-title="Released"><a href="modificarProveedor.php?empresa=<?php echo $row['Empresa']; ?> "  class="btn btn-primary">Modificar</a></td>
              						<td data-title="Released"><a href="eliminar_proveedor.php"  class="btn btn-primary">Eliminar</a></td>
              					</tr>
              					<?php } ?>
              				</tbody>
              			</thead>
              		</table>
                </div>
            </div>
        </div>
    </div> <!-- panel-body -->

	<footer class="footer text-right">
        R&B Design Web&copy <?php echo date('Y'); ?>
    </footer>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <script src="../assets/js/jquery.app.js"></script>

        <!-- moment js  -->
        <script src="../assets/plugins/moment/moment.js"></script>

        <!-- counters  -->
        <script src="../assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- sweet alert  -->
        <script src="../assets/plugins/sweetalert/dist/sweetalert.min.js"></script>


        <!-- flot Chart -->
        <script src="../assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="../assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="../assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- todos app  -->
        <script src="../assets/pages/jquery.todo.js"></script>

        <!-- chat app  -->
        <script src="../assets/pages/jquery.chat.js"></script>

        <!-- dashboard  -->
        <script src="../assets/pages/jquery.dashboard.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

  <!--       <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div id="cuadro" align="center" >
  <h2>Proveedores..</h2>
  		<table id="lookup" class="table" width="85%" cellpadding="1" border="2">
  			<thead class="thead-light">
  
  				<tr class="centro">
  
  
  					<td scope="col"><b>ID</b></td>
  					<td scope="col"><b>Empresa</b></td>
  					<td scope="col"><b>Direccion</b></td>
  					<td scope="col"><b>Localidad</b></td>
  					<td scope="col"><b>Telefono</b></td>
  					<td scope="col"><b>C.U.I.T.</b></td>
  					<td scope="col"><b>E-Mail</b></td>
  					<td scope="col"><b>Modificar</b></td>
  					<td scope="col"><b>Eliminar</b></td>
  				</tr>
  				<tbody>
  					<?php while($row=$resultado->fetch_assoc()){ ?>
  					<tr>
  						<td scope="row"><?php echo $row['id']?></td>
  						<td scope="row"><?php echo $row['Empresa']?></td>
  						<td scope="row"><?php echo $row['Direccion']?></td>
  						<td scope="row"><?php echo $row['Localidad']?></td>
  						<td scope="row"><?php echo $row['Telefono']?></td>
  						<td scope="row"><?php echo $row['cuit']?></td>
  						<td scope="row"><?php echo $row['mail']?></td>
  						
  						Botones Modificar y Eliminar..
  						<td scope="row"><a href="modificarProveedor.php?id=<?php echo $row['id']; ?> "  class="btn btn-primary">Modificar</a></td>
  						<td scope="row"><a href="eliminar_proveedor.php"  class="btn btn-primary">Eliminar</a></td>
  					</tr>
  					<?php } ?>
  				</tbody>
  			</thead>
  		</table>
  	</div>	
  
  	 -->
</body>
</html>