<?php 
	include '../cn.php';


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proveedores</title>

	
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Programa de Edilu S.R.L.">
        <meta name="author" content="Coderthemes">

        <link rel="Shortcut Icon" type="image/x-png" href="../assets/images/Edilu2.png" />

        <title> Modificar Proveedores | Edilu S.R.L. </title>

        <link href="../assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="../assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
	

</head>
<body class="fixed-left" style="height: 100%;">

<!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center logodiv">
                        <a href="../index.php" class="logo"><img src="../assets/images/LolaMora.png" style="width: 90px; vertical-align: text-bottom; border-radius: 10px; opacity: .7;"><span>  Lenceria </span> </a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Buscar">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="../assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Mi Perfil</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Ajustes</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Salir</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="../assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Ramiro Benzacar <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Perfil<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Ajustes</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Salir</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"> Administrador </p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="../index.php" class="waves-effect waves-light active"><i class="md md-home"></i><span> Inicio </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md-view-module"></i><span> Productos </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="../agregarProducto.php">Agregar Productos</a></li>
                                    <li><a href="productos.php">Todos los productos</a></li>
                                    <li><a href="../transferirProducto.php">Transferencias</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="../inventario.php" class="waves-effect"><i class="md-assignment"></i><span> Inventario </span></a>
                            </li>

                            <li>
                                <a href="../clientes.php" class="waves-effect"><i class="md-group"></i><span> Clientes </span></a>
                            </li>

                            <li>
                                <a href="proveedores.php" class="waves-effect"><i class="md-group"></i><span> Proveedores </span></a>
                            </li>



                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md-send"></i><span> Cotizaciones </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="../cotizacion.php">Crear Cotización</a></li>
                                    <li><a href="../cotizaciones.php">Todas las cotizaciones</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md-subject"></i><span> Remisiones </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="../nuevaremision.php">Crear Remisión</a></li>
                                    <li><a href="../remisiones.php">Todas las Remisiones</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md-account-balance"></i><span> Facturación </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="../factura.php">Nueva Factura</a></li>
                                  <li><a href="../facturas.php">Facturas Pasadas</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="../usuarios.php" class="waves-effect"><i class="md-account-circle"></i><span> Usuarios </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Fin del Menu.. -->

<div align="center" style="margin-top: 100px;">
      <img src="../assets/images/LolaMorena.jpg" alt="" width="200" style="border-radius: 15px; ">

 

	
	<?php
	 require('../cn.php');
	
		

		 ?>

<div class="panel-body">
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          
	
	
	<?php echo date('d/m/Y'); ?>
	
	<h1>Proveedores</h1>
	
</div>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
<?php 
	
		$id = $_REQUEST['Empresa'];
	
		$sql= " SELECT * FROM proveedores WHERE Empresa='$empresa'";

		$resultado=$conexion->query($sql);

		$row=$resultado->fetch_assoc();

		 ?>
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="../index.php">Edilu S.R.L.</a></li>
                        <li class="active">Proveedores</li>
                    </ol>
                </div>
            </div>
		  <form class="form-horizontal" role="form" action="modificarProv.php?id=<?php echo $row['id']; ?>" method="post" autocomplete="on">
		      <div class="form-group">
		          <label class="col-md-2 control-label">Empresa</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="empresa" value="<?php echo $row['Empresa']; ?>">
		          </div>
		      </div>
		    
		      
		      <div class="form-group">
		          <label class="col-md-2 control-label">Dirección</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="direccion" value="<?php echo $row['Direccion']; ?>">
		          </div>
		      </div>
		      <div class="form-group">
		          <label class="col-md-2 control-label">Localidad</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="localidad" value="<?php echo $row['Localidad']; ?>">
		          </div>
		      </div>

		      <div class="form-group">
		          <label class="col-md-2 control-label">Telefono</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="telefono" value="<?php echo $row['Telefono']; ?>">
		          </div>
		      </div>

		      <div class="form-group">
		          <label class="col-md-2 control-label">C.U.I.T.</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="cuit" value="<?php echo $row['cuit']; ?>">
		          </div>
		      </div>

		      <div class="form-group">
		          <label class="col-md-2 control-label">E-Mail</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="mail" value="<?php echo $row['mail']; ?>">
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
                <table class="table">
                    <thead>

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