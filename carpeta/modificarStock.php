<?php include '../cn.php'; 

/*$id = $_REQUEST['id'];
	
$sql= " SELECT * FROM Stock WHERE id='$id'";

$resultado=$conexion->query($sql);

$row=$resultado->fetch_assoc();

*/

?>
<!DOCTYPE html>
<html lang="es">
<head>
	

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="Shortcut Icon" type="image/x-png" href="../assets/images/Edilu2.png" />

        <title> Portal | Edilu S.R.L. </title>

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




	<div align="center">
	<br>
	
	<h2 style="color:#7d0505;"><?php echo date('d/m/Y'); ?></h2>
	
<br><br>
		<h1><u><b>Modificar Stock</b></u></h1>
	</div>

<div align="center">
      <img src="../assets/images/LolaMorena.jpg" alt="" width="200" style="border-radius: 15px; ">

   </div>

	
	<?php
	 require('../cn.php');
	
		$id = $_REQUEST['id'];
	
		$sql= " SELECT * FROM Stock WHERE id='$id'";

		$resultado=$conexion->query($sql);

		$row=$resultado->fetch_assoc();

		 ?>

<div class="panel-body">
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="../index.php">Edilu S.R.L.</a></li>
                        <li class="active">Modificar Productos</li>
                    </ol>
                </div>
            </div>
		  <form class="form-horizontal" role="form" action="modificarProceso.php?id=<?php echo $row['id']; ?>" method="post" autocomplete="on">
		      <div class="form-group">
		          <label class="col-md-2 control-label">Código</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="codigo" value=" <?php echo $row['Codigo']; ?>">
		          </div>
		      </div>
		    
		      
		      <div class="form-group">
		          <label class="col-md-2 control-label">Descripción</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="descripcion" value=" <?php echo $row['Descripcion']; ?>">
		          </div>
		      </div>
		      <div class="form-group">
		          <label class="col-md-2 control-label">Precio Unitario $</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="precio" value=" <?php echo $row['Precio']; ?>">
		          </div>
		      </div>

		      <div class="form-group">
		          <label class="col-md-2 control-label">Empresa</label>
		          <div class="col-md-10">
		              <input type="text" class="form-control"  name="empresa" value=" <?php echo $row['Empresa']; ?>">
		          </div>
		      </div>
		       <div class="form-group" align="center">
				  <a href="../productos.php"><button type="button" class="btn btn-danger btn-custom waves-effect waves-light m-b-5 control-label col-md-3 col-md-offset-2">Cancelar</button></a>

				  <input type="submit" class="btn btn-success btn-custom" value="Guardar" style="margin-left: 10px; width: 25%;">

			   </div>
  		</form>
  <br>
 
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
</body>
</html>