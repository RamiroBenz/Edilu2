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
                                <h4 class="pull-left page-title">Nueva Remisión</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="index.html">Kamelperd</a></li>
                                    <li><a href="remisiones.html">Remisiones</a></li>
                                    <li class="active">Nueva Remisión</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form id="basic-form" action="#">
                                            <div>
                                                <h3>Datos</h3>
                                                <section>
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                      <div class="panel panel-border panel-primary">
                                                          <div class="panel-heading">
                                                              <h3 class="panel-title">Servicio</h3>
                                                          </div>
                                                          <div class="panel-body">
                                                            <div class="col-sm-6">
                                                                <div class="radio">
                                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="checked">
                                                                    <label for="radio1">
                                                                        Renta
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                                    <label for="radio2">
                                                                        Venta
                                                                    </label>
                                                                </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="panel panel-border panel-primary">
                                                          <div class="panel-heading">
                                                              <h3 class="panel-title">Operación</h3>
                                                          </div>
                                                          <div class="panel-body">
                                                            <div class="col-sm-6">
                                                                <div class="radio">
                                                                    <input type="radio" name="radio2" id="radio3" value="option3" checked="checked">
                                                                    <label for="radio3">
                                                                        Entrega de Equipo
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <input type="radio" name="radio2" id="radio4" value="option4">
                                                                    <label for="radio4">
                                                                        Recolecta de Equipo
                                                                    </label>
                                                                </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>




                                                </section>
                                                <h3>Cliente</h3>
                                                <section>
                                                  <div class="form-group clearfix">
                                                      <label class="col-lg-2 control-label" for="userName">Cliente *</label>
                                                      <div class="col-md-10">
                                                          <select class="select2 form-control" data-placeholder="Choose a Country...">
                                                            <option value="#">Seleccionar Cliente</option>
                                                            <option value="Constructora SA de CV">Constructora SA de CV</option>
                                                            <option value="Constructora S de RL">Constructora S de RL</option>
                                                            <option value="Cliente 3">Cliente 3</option>
                                                            <option value="Cliente 4">Cliente 4</option>
                                                            <option value="Cliente 5">Cliente 5</option>
                                                            <option value="Cliente 6">Cliente 6</option>
                                                            <option value="Cliente 7">Cliente 7</option>
                                                          </select>
                                                        </div>
                                                  </div>
                                                  <div class="form-group clearfix">
                                                      <label class="col-lg-2 control-label" for="userName">Proyecto *</label>
                                                      <div class="col-md-10">
                                                          <select class="select2 form-control" data-placeholder="Choose a Country...">
                                                            <option value="#">Seleccionar Proyecto</option>
                                                            <option value="Proyecto 1">Proyecto 1</option>
                                                            <option value="Proyecto 2">Proyecto 2</option>
                                                            <option value="Proyecto 3">Proyecto 3</option>
                                                            <option value="Proyecto 4">Proyecto 4</option>
                                                            <option value="Proyecto 5">Proyecto 5</option>
                                                            <option value="Proyecto 6">Proyecto 6</option>
                                                            <option value="Proyecto 7">Proyecto 7</option>
                                                          </select>
                                                        </div>
                                                  </div>
                                                  <div class="form-group clearfix">
                                                      <label class="col-lg-2 control-label" for="userName">Transporte *</label>
                                                      <div class="col-md-10">
                                                          <select class="select2 form-control" data-placeholder="Choose a Country...">
                                                            <option value="#">Seleccionar Transporte</option>
                                                            <option value="Transporte 1">Transporte 1</option>
                                                            <option value="Transporte 2">Transporte 2</option>
                                                            <option value="Transporte 3">Transporte 3</option>
                                                            <option value="Transporte 4">Transporte 4</option>
                                                            <option value="Transporte 5">Transporte 5</option>
                                                            <option value="Transporte 6">Transporte 6</option>
                                                            <option value="Transporte 7">Transporte 7</option>
                                                          </select>
                                                        </div>
                                                  </div>
                                                  <div class="form-group clearfix">
                                                      <label class="col-lg-2 control-label" for="password"> Placas *</label>
                                                      <div class="col-lg-10">
                                                          <input id="password" name="password" type="text" class="required form-control">

                                                      </div>


                                                </section>
                                                <h3>Equipo</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                          <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                            <tr>
                                                                                <th>SKU</th>
                                                                                <th>Producto</th>
                                                                                <th>Medida</th>
                                                                                <th>Unidad</th>
                                                                                <th>Precio Unitario</th>
                                                                                <th>Cantidad</th>
                                                                            </tr>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Marco</td>
                                                                                <td>1.00x1.56mts</td>
                                                                                <td>Pieza</td>
                                                                                <td>$15.70 MXN</td>
                                                                                <td>
                                                                                  <div class="col-lg-6">
                                                                                      <input type="text" class="form-control" >
                                                                                  </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2</td>
                                                                                <td>Marco</td>
                                                                                <td>1.50x1.56mts</td>
                                                                                <td>Pieza</td>
                                                                                <td>$19.10 MXN</td>
                                                                                <td>
                                                                                  <div class="col-lg-6">
                                                                                      <input type="text" class="form-control" >
                                                                                  </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3</td>
                                                                                <td>Marco</td>
                                                                                <td>2.00x1.56mts</td>
                                                                                <td>Pieza</td>
                                                                                <td>$21.70 MXN</td>
                                                                                <td>
                                                                                  <div class="col-lg-6">
                                                                                      <input type="text" class="form-control" >
                                                                                  </div>
                                                                                </td>
                                                                            </tr>
                                                                          </tbody>
                                                                  </table>
                                                          </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </section>
                                                <h3>Finalizar</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                          <div class="form-group">
                                                              <label class="col-md-2 control-label">Observaciones</label>
                                                              <div class="col-md-10">
                                                                  <textarea class="form-control" rows="2"></textarea>
                                                              </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <br>
                                                      <br>
                                                      <div class="col-md-10">
                                                          <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-b-5 control-label col-md-4 col-md-offset-3"><i class="ion-arrow-down-a"></i> <span>Descargar Contrato</span></button>
                                                          <a href="remision.html"><button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-b-5 control-label col-md-4 col-md-offset-1"><i class="ion-eye"></i> <span>Visualizar Remisión</span></button></a>
                                                      </div>
                                                </section>
                                            </div>
                                        </form>
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

                        </div> <!-- End row -->



                <footer class="footer text-right">
                    R&B Design Web&copy <?php echo date('Y'); ?>
                </footer>
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

        <!--Form Validation-->
        <script src="assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="assets/plugins/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>


	</body>
</html>
