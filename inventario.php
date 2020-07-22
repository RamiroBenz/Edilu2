<?php 

include "cn.php";

$sql = "SELECT * FROM Stock";

$resultado=$conexion->query($sql);


 ?>
<!DOCTYPE html>
<html>
    <head>
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
 .responsive-table tbody th[scope="rol"] {
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
   .responsive-table tbody th[scope="rol"] {
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
            <li><a href="#">Edilu S.R.L.</a></li>
            <li class="active">Inventario</li>
        </ol>
    </div>
</div>
<!-- Page-Title -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
              <button type="button" class="btn btn-icon btn-default waves-effect m-b-5" style="float: right;"><i class="ion-archive"></i> Descargar</button>
              <button type="button" class="btn btn-icon btn-default waves-effect m-b-5" style="float: right;"><i class="ion-forward "></i> Entrada de productos</button>
              <button type="button" class="btn btn-icon btn-default waves-effect m-b-5" style="float: right;"><i class="ion-compose"></i> Inventario Físico</button>
              <button type="button" class="btn btn-icon btn-default waves-effect m-b-5" style="float: right;"><i class="ion-arrow-swap"></i> Movimientos</button>
              <h3 class="panel-title">Inventario</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <br>
                    <br>
<table class="responsive-table">
    <caption>Productos: Edilu S.R.L.</caption>
            <thead class="thead-light">

                <tr>
                    
                    <th scope="col"><b>Id</b></th>
                    <th scope="col"><b>Codigo</b></th>
                    <th scope="col"><b>Descripción</b></th>
                    <th scope="col"><b>Precio</b></th>
                    <th scope="col"><b>Empresa</b></th>
                    

                    <th scope="col"><b>Modificar</b></th>
                    <th scope="col"><b>Eliminar</b></th>
                </tr>
                <tbody>
                    <?php while($row=$resultado->fetch_assoc()){ ?>
                    <tr>
                        <th scope="rol"><?php echo $row['id']?></th>
                        <td data-title="Released"><?php echo $row['Codigo']?></td>
                        <td data-title="Released"><?php echo $row['Descripcion']?></td>
                        <td data-title="Released"><?php echo $row['Precio']?></td>
                        <td data-title="Released"><?php echo $row['Empresa']?></td>
                     
                        <!-- Botones Modificar y Eliminar.. -->
                        <td data-title="Released"><a href="modificar.php?id=<?php echo $row['id']; ?> " class="btn btn-primary">Modificar</a></td>
                        <td data-title="Released"><a href="eliminar_stock.php" class="btn btn-primary">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </thead>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
</div> <!-- End row -->

</div> <!-- container -->
</div> <!-- content -->
<br>
<br>
<div align="center">
    <footer class="footer text-right">
        R&B Design Web&copy <?php echo date('Y'); ?>
    </footer>
</div>
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
