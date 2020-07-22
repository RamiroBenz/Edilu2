<?php 

include "cn.php";

$sql = "SELECT * FROM clientes";

$resultado=$conexion->query($sql);


 ?>
 <!DOCTYPE html>
<html>
    <head>
       <?php include 'head.php'; ?>
    </head>


    <body class="fixed-left">

        <?php include 'menu.php'; ?>


          



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
                                    <h3 class="pull-left page-title">Detalles de Clientes - Edilu S.R.L.</h3>
                                    <ol class="breadcrumb pull-right">
                                    <li><a href="index.php" style="color: #7d0505;">Edilu S.R.L.</a></li>
                                    <li><a href="clientes.php">Clientes</a></li>
                                    <li class="active"></li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-info">
                                    <span class="mini-stat-icon"><i class="ion-social-usd"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter">1,004,876</span>
                                        Total Ventas
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Vendido este mes <span class="pull-right">$49,756</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-purple bx-shadow">
                                    <span class="mini-stat-icon"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter">21</span>
                                        Remisiones
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Remisiones este mes <span class="pull-right">9</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-success bx-shadow">
                                    <span class="mini-stat-icon"><i class="ion-briefcase"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter">24</span>
                                        Cotizaciones
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Cotizaciones este mes <span class="pull-right">2</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bg-primary bx-shadow">
                                    <span class="mini-stat-icon"><i class="ion-flag"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter">5</span>
                                        Facturas sin pagar
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase text-white m-0">Por <span class="pull-right">238,560 MXN</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->

                        <div class="col-lg-13">
                            <ul class="nav nav-tabs navtab-bg">
                                <li class="active">
                                    <a href="#home" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs">Información del Cliente</span>
                                    </a>
                                </li>
                                
                              </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <div class="panel panel-default">
                                              <div class="panel-heading"><h3 class="panel-title">Edilu S.R.L.</h3></div>
                                              <div class="panel-body">
                                                  <form class="form-horizontal" role="form" action="carpeta/insertarCliente.php" method="post">
                                                      <div class="form-group">
                                                          <label class="col-md-2 control-label">Razón Social</label>
                                                          <div class="col-md-10">
                                                              <input type="text" disable="disable" class="form-control"  name="empresa" value="">
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="form-group">
                                                          <label class="col-md-2 control-label">Dirección</label>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control"  name="direccion" value="">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="col-md-2 control-label">Localidad</label>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control"  name="localidad" value="">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="col-md-2 control-label">Teléfono</label>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" name="telefono" value="">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="col-md-2 control-label">C.U.I.T.:</label>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" name="cuit" value="">
                                                          </div>
                                                      </div>
                                                     
                                                  
                                                  <br>
                                                    <div class="form-group">
                                                      
                                                      <input type="submit" class="btn btn-primary" value="Guardar" style="margin-left: 10px; width: 20%; margin-right: 60px;">


                                                      <button type="button" class="btn btn-danger" style="width: 20%;">Cancelar</button>

                                                    </div>
                                                  </form>
                                              </div> <!-- panel-body -->

                                          </div> <!-- panel -->
                                      </div> <!-- col -->
                                  </div> <!-- End row -->
                                </div>
                                
                                
                                

                            </div>
                          </div>
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    R&B Design Web&copy <?php echo date('Y'); ?>
                </footer>

            </div>


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>

        <!-- moment js  -->
        <script src="assets/plugins/moment/moment.js"></script>

        <!-- counters  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- sweet alert  -->
        <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>


        <!-- flot Chart -->
        <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- todos app  -->
        <script src="assets/pages/jquery.todo.js"></script>

        <!-- chat app  -->
        <script src="assets/pages/jquery.chat.js"></script>

        <!-- dashboard  -->
        <script src="assets/pages/jquery.dashboard.js"></script>

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
