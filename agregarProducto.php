<?php 
  include 'cn.php';
  
  $sql = "SELECT * FROM Stock";

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

                      <div class="row">
                          <div class="col-sm-12">
                              <ol class="breadcrumb pull-right">
                                  <li><a href="index.php" style="color: #7d0505;">Edilu S.R.L.</a></li>
                                  <li><a href="productos.php" style="color: #7d0505;">Productos</a></li>
                                  <li class="active" style="color: #7d0505;">Agregar Producto</li>
                              </ol>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12">
                              <div class="panel panel-default">
                                  <div class="panel-heading"><h3 class="panel-title">Agregar Producto</h3></div>
                                  <div class="panel-body">
                                      <form class="form-horizontal" role="form" action="insertarStock.php" method="post" autocomplete="on">
                                          <div class="form-group">
                                              <label class="col-md-2 control-label">Código</label>
                                              <div class="col-md-10">
                                                  <input type="text" class="form-control"  name="codigo">
                                              </div>
                                          </div>
                                          <!-- <div class="form-group">
                                              <label class="col-md-2 control-label">Producto</label>
                                              <div class="col-md-10">
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div> -->
                                          
                                          <div class="form-group">
                                              <label class="col-md-2 control-label">Descripción</label>
                                              <div class="col-md-10">
                                                  <textarea class="form-control" rows="3"  name="descripcion"></textarea>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-md-2 control-label">Precio </label>
                                              <div class="col-md-10">
                                                  <input type="text" class="form-control"  name="precio">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="col-md-2 control-label">Empresa </label>
                                              <div class="col-md-10">
                                                  <input type="text" class="form-control"  name="empresa">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                      <button type="button" class="btn btn-danger btn-custom waves-effect waves-light m-b-5 control-label col-md-3 col-md-offset-2">Cancelar</button>
                                      <input type="submit" class="btn btn-success btn-custom" value="Guardar" style="margin-left: 10px; width: 25%;">
                                      </div>
                                      </form>
                                      <br>
                                      
                                  </div> <!-- panel-body -->

                              </div> <!-- panel -->
                          </div> <!-- col -->
                      </div> <!-- End row -->


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
