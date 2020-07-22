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
                                <ol class="breadcrumb pull-right">
                                    <li><a href="index.html">Kamelperd</a></li>
                                    <li class="active">Facturas</li>
                                </ol>
                            </div>
                        </div>
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <button type="button" class="btn btn-default waves-effect m-b-5" style="float: right;"><a href="factura.html">+ Nueva Factura</a></button>
                                      <button type="button" class="btn btn-default waves-effect m-b-5" style="float: right;"><a>Registrar Pago</a></button>
                                        <h3 class="panel-title">Todas las facturas</h3>
                                    </div>
                                    <div class="panel-body">
                                      <div class="row">
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                              <div class="table-responsive">
                                                  <table class="table">
                                                      <thead>
                                                          <tr>
                                                              <th>ID</th>
                                                              <th>Fecha</th>
                                                              <th>Cantidad</th>
                                                              <th>IVA</th>
                                                              <th>Total</th>
                                                              <th>Pagado</th>
                                                              <th>Estado</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td>156</td>
                                                              <td>31/01/2017</td>
                                                              <td>$100,654.00</td>
                                                              <td>$16,789.45 </td>
                                                              <td>$117,443.45</td>
                                                              <td>$117,443.45</td>
                                                              <td><span class="label label-success">Pagado Completamente</span></td>
                                                          </tr>
                                                          <tr>
                                                              <td>247</td>
                                                              <td>31/05/2017</td>
                                                              <td>$100,654.00</td>
                                                              <td>$16,789.45 </td>
                                                              <td>$117,443.45</td>
                                                              <td>$117,443.45</td>
                                                              <td><span class="label label-success">Pagado Completamente</span></td>
                                                          </tr>
                                                          <tr>
                                                              <td>389</td>
                                                              <td>31/10/2017</td>
                                                              <td>$100,654.00</td>
                                                              <td>$16,789.45 </td>
                                                              <td>$117,443.45</td>
                                                              <td>$117,443.45</td>
                                                              <td><span class="label label-success">Pagado Completamente</span></td>
                                                          </tr>
                                                          <tr>
                                                              <td>475</td>
                                                              <td>31/12/2017</td>
                                                              <td>$100,654.00</td>
                                                              <td>$16,789.45 </td>
                                                              <td>$117,443.45</td>
                                                              <td>$52,443.45</td>
                                                              <td><span class="label label-warning">Pagado Parcialmente</span></td>
                                                          </tr>
                                                          <tr>
                                                              <td>599</td>
                                                              <td>31/01/2018</td>
                                                              <td>$100,654.00</td>
                                                              <td>$16,789.45 </td>
                                                              <td>$117,443.45</td>
                                                              <td>-</td>
                                                              <td><span class="label label-danger">Sin Pagar</span></td>
                                                          </tr>
                                                        </tbody>
                                                </table>
                                    </div>
                                    </div>
                                    </div>
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
