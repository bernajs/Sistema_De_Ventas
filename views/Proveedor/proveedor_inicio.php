<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/bootstrap.css";?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/font-awesome.css";?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/js/morris/morris-0.4.3.min.css";?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/custom.css";?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo URL_BASE;?>/index.php/Inicio/inicio">Sistema de Ventas</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<?php
    $visit = $_COOKIE['lastVisit'];
$timeframe = 90 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("G:i - m/d/y"), $timeframe);
if(isset($_COOKIE['lastVisit']))
    $visit = $_COOKIE['lastVisit'];
else
echo "Welcome to out web page!";
echo "Último acceso: ". $visit;
?>
&nbsp;<a href="#" class="btn btn-danger square-btn-adjust">Salir</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo URL_BASE."/public/assets/img/find_user.png";?>" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="<?php echo URL_BASE;?>/index.php/Usuario/usuario_inicio"><i class="fa fa-user fa-3x"></i>Usuarios</a>
                    </li>
                    <li>
                        <a  href="<?php echo URL_BASE;?>/index.php/Cliente/cliente_inicio"><i class="fa fa-users fa-3x"></i>Clientes</a>
                    </li>
                    <li>
                        <a  href="<?php echo URL_BASE;?>/index.php/Producto/producto_inicio"><i class="fa fa-shopping-cart fa-3x"></i>Productos</a>
                    </li>
						   <li  >
                        <a class="active-menu" href="<?php echo URL_BASE;?>/index.php/Proveedor/proveedor_inicio"><i class="fa fa-truck fa-3x"></i>Proveedores</a>
                    </li>	
                      <li  >
                        <a  href="<?php echo URL_BASE;?>/index.php/Pedido/pedido_inicio"><i class="fa fa-credit-card fa-3x"></i>Pedidos</a>
                    </li>
                    <li>
                        <a href="<?php echo URL_BASE;?>/index.php/Inicio/inicio">
                            <i class="fa fa-bolt fa-3x">
                                <!--::before-->
                            </i>
                            Home
                        </a>
                    </li>
                    <!--<li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>-->				
					
					                   
                    <!--<li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	-->
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Menú proveedores</h2>   
                        <h5>Elige la acción que desees realizar. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />



                 <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <a  href="<?php echo URL_BASE;?>/index.php/Proveedor/guardar_proveedor">
                    <p class="main-text">Registrar proveedor</p>
                    <!--<p class="text-muted">Messages</p>-->
                </div>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <a  href="modificar_proveedor.html">
                    <p class="main-text">Modificar proveedor</p>
                    <!--<p class="text-muted">Remaining</p>-->
                </div>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <a  href="buscar_proveedor.html">
                    <p class="main-text">Eliminar proveedor</p>
                    <!--<p class="text-muted">Notifications</p>-->
                </div>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <a  href="buscar_proveedor.html">
                    <p class="main-text">Consultar proveedor</p>
                    <!--<p class="text-muted">Pending</p>-->
                </div>
             </div>
             </div>
            </div>
                 <!-- /. ROW  -->
                <hr /> 




             
                <!--<div class="row"> 
                    
                      
                               <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>            
                </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Area Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                    </div>            
                </div> 
                
           </div>
                 <!-- /. ROW  -->
                <!--<div class="row">                     
                      
                               <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>            
                </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                        </div>
                    </div>            
                </div> 
                
           </div>
                 <!-- /. ROW  -->
    <!--</div>
             <!-- /. PAGE INNER  -->
            <!--</div>
         <!-- /. PAGE WRAPPER  -->
        <!--</div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo URL_BASE."/public/assets/js/jquery-1.10.2.js";?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo URL_BASE."/public/assets/js/bootstrap.min.js";?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo URL_BASE."/public/assets/js/jquery.metisMenu.js";?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo URL_BASE."/public/assets/js/morris/raphael-2.1.0.min.js";?>"></script>
    <script src="<?php echo URL_BASE."/public/assets/js/morris/morris.js";?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo URL_BASE."/public/assets/js/custom.js";?>"></script>
    
   
</body>
</html>
