  <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center logodiv">
                        <a href="index.html" class="logo"><img src="assets/images/Edilu2.png" style="width: 90px; vertical-align: text-bottom; border-radius: 10px; opacity: .5;"><span style="font-size: 14px;">  Lenceria </span> </a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars" style="color: #7d0505;"></i>
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
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
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
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
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
                                <a href="index.php" class="waves-effect waves-light active"><i class="md md-home"></i><span> Inicio </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="productos.php" class="waves-effect waves-light"><i class="md-view-module"></i><span> Productos </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="agregarProducto.php">Agregar Productos</a></li>
                                    <li><a href="productos.php">Todos los productos</a></li>
                                    <li><a href="transferirProducto.php">Transferencias</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="inventario.php" class="waves-effect"><i class="md-assignment"></i><span> Inventario </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="clientes.php" class="waves-effect waves-light"><i class="md-view-module"></i><span> Clientes </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="cliente.php">Agregar Cliente</a></li>
                                    <li><a href="clientes.php">Todos los Clientes</a></li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="proveedores.php" class="waves-effect"><i class="md-group"></i><span> Proveedores </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md-send"></i><span> Cotizaciones </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="cotizacion.php">Crear Cotización</a></li>
                                    <li><a href="cotizaciones.php">Todas las cotizaciones</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md-subject"></i><span> Remisiones </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="nuevaremision.php">Crear Remisión</a></li>
                                    <li><a href="remisiones.php">Todas las Remisiones</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md-account-balance"></i><span> Facturación </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="preFactura.php">Nueva Factura</a></li>
                                  <li><a href="facturas.php">Facturas Pasadas</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="usuarios.php" class="waves-effect"><i class="md-account-circle"></i><span> Usuarios </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->


