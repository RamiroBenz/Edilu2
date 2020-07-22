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
                                <h4 class="pull-left page-title">Nueva Factura</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="index.html">Lola Morena || Edilu S.R.L.</a></li>
                                    <li class="active">Facturación</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h2 class="text-right"><img src="assets/images/Edilu2.png" style="height: 80px"></h2>

                                            </div>
                                            <div class="pull-right">
                                                <h4>Factura # 123<br></h4>
                                                <p><strong>Fecha de emisión: </strong> 02/06/2020 </p>
                                                <p><strong>Folio Fiscal: </strong>c794dde1-c219-4e74-9ccd-af561876be03</p>
                                                <p><strong>No. Certificado Digital: </strong>00001000000407911928</p>
                                                <p><strong>No. Certificado SAT: </strong>00001000000306850881</p>
                                                <p><strong>Fecha y hora de certificación: </strong>2018-02-02T12:01:29</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>CLCS023254LF1</strong><br>
                                                      <strong>Constructora SA de CV</strong><br>
                                                       Av. de los Bosques 156 Int.504<br>
                                                       Col. Tecamachalco. 53950<br>
                                                       Naucalpan Estado de México<br>
                                                       T: (55) 5249 7890
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                  <address>
                                                    <strong>SAKA254852LP2</strong><br>
                                                    <strong>Kamelperd SA de CV</strong><br>
                                                     Av. de los Bosques 156 Int.504<br>
                                                     Col. Tecamachalco. 53950<br>
                                                     Naucalpan Estado de México<br>
                                                     T: (55) 5249 7890
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr>
                                                            <th>Cantidad</th>
                                                            <th>Clave</th>
                                                            <th>Producto</th>
                                                            <th>Unidad</th>
                                                            <th>Descripción</th>
                                                            <th>Valor Unitario</th>
                                                            <th>Importe</th>
                                                        </tr></thead>
                                                        <tbody>
                                                            <tr>
                                                                  <td>20</td>
                                                                  <td>M01</td>
                                                                  <td>43232404</td>
                                                                  <td>E48</td>
                                                                  <td>Marco 1.00x1.56mts</td>
                                                                  <td>$314.00</td>
                                                                  <td>$6,280.00</td>
                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius: 0px">
                                            <div class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Sub-total:</b> $6,280.00 </p>
                                                <p class="text-right">IVA (21%): $1,004.80 </p>
                                                <hr>
                                                <h4 class="text-right">TOTAL $7,284.80 </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="#" class="btn btn-primary waves-effect waves-light">Generar y Enviar</a>
                                            </div>
                                        </div>
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
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
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

	</body>
</html>
