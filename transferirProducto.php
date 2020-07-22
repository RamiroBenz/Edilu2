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
                                  <li><a href="index.html">Kamelperd</a></li>
                                  <li><a href="productos.html">Productos</a></li>
                                  <li class="active">Transferir Producto</li>
                              </ol>
                          </div>
                      </div>

                        <div class="row">

                      <div class="col-lg-12">
                         <div class="panel panel-default">
                             <div class="panel-heading"><h3 class="panel-title">Transferir Producto</h3></div>
                             <div class="panel-body">
                                 <form action="#" class="form-horizontal">
                                     <div class="form-group">
                                         <label class="col-md-2 control-label">Producto a Modificar</label>
                                         <div class="col-md-10">
                                             <select class="select2 form-control" data-placeholder="Choose a Country...">
                                               <option value="#">Seleccionar Producto</option>
                                               <option value="Marco 1.00x1.56mts">Marco 1.00x1.56mts</option>
                                               <option value="Marco 1.50x1.56mts">Marco 1.50x1.56mts</option>
                                               <option value="Marco 2.00x1.56mts">Marco 2.00x1.56mts</option>
                                               <option value="Marco Puente 2.00x1.56mts">Marco Puente 2.00x1.56mts</option>
                                               <option value="Marco Pasillo 2.00x0.80mts">Marco Pasillo 2.00x0.80mts</option>
                                               <option value="Marco Pasillo 2.00x1.10mts">Marco Pasillo 2.00x1.10mts</option>
                                               <option value="Cruceta 2.00mts">Cruceta 2.00mts</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 control-label">Cantidad a Modificar</label>
                                         <div class="col-md-10">
                                             <input type="text" class="form-control">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 control-label">Nuevo Producto</label>
                                         <div class="col-md-10">
                                             <select class="select2 form-control" data-placeholder="Choose a Country...">
                                               <option value="#">Seleccionar Producto</option>
                                               <option value="Marco 1.00x1.56mts">Marco 1.00x1.56mts</option>
                                               <option value="Marco 1.50x1.56mts">Marco 1.50x1.56mts</option>
                                               <option value="Marco 2.00x1.56mts">Marco 2.00x1.56mts</option>
                                               <option value="Marco Puente 2.00x1.56mts">Marco Puente 2.00x1.56mts</option>
                                               <option value="Marco Pasillo 2.00x0.80mts">Marco Pasillo 2.00x0.80mts</option>
                                               <option value="Marco Pasillo 2.00x1.10mts">Marco Pasillo 2.00x1.10mts</option>
                                               <option value="Cruceta 2.00mts">Cruceta 2.00mts</option>
                                             </select>
                                         </div>
                                     </div>
                                     <br>
                                     <div class="form-group">
                                       <button type="button" class="btn btn-danger btn-custom waves-effect waves-light m-b-5 col-md-3 col-md-offset-2">Cancelar</button>
                                       <button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5 col-md-3 col-md-offset-2">Guardar</button>
                                     </div>


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
