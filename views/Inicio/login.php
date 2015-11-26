<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo URL_BASE;?>/public/assets/css/bootstrap.css"; rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo URL_BASE;?>/public/assets/css/font-awesome.css" rel="stylesheet">
        <!-- CUSTOM STYLES-->
    <link href="<?php echo URL_BASE;?>/public/assets/css/custom.css" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

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
font-size: 16px"> 
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
 &nbsp;<a style="border-radius: 5px" href="#" class="btn btn-danger square-btn-adjust">Salir</a> </div>
        </nav> 
        </div>

  
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br><br>
                <h2>Inicio de sesión</h2>
               
                <h5>(Inicia sesión para tener acceso)</h5>
            </div>
        </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>	Ingresa tus datos</strong>  
                            </diuv>
                            <div class="panel-body">
                                <form action="" method="POST" role="form">
                                       <br>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" placeholder="Usuario " type="text" name="user">
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input class="form-control" placeholder="Contraseña" type="password" name="pass">
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox"> Recordarme
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#">¿Olvidó su contraseña?</a> 
                                            </span>
                                        </div>
                                     <input type="submit" name="submit" value="Iniciar sesión">
                                    <hr>

                                    ¿No estáregistrado?<a href="<?php echo URL_BASE;?>/index.php/Usuario/guardar_usuario"> Registrarse</a> 
                                    </form>

                             


                            </div>
                           
                        </div>
                    </div>

                    <?php
                      // Execute this code if the submit button is pressed.

                      $inputu=$_POST['user'];
                      $inputc=$_POST['pass'];
                      setcookie("usuario", $inputu, time()+3600,"/","");
                      setcookie("contrasenia", $inputc, time()+3600,"/","");
                      

                    ?>
                
                
        </div>
    </div>
     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="//www.google-analytics.com/analytics.js" async=""></script><script src="<?php echo URL_BASE;?>/public/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->    
    <script src="<?php echo URL_BASE;?>/public/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo URL_BASE;?>/public/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo URL_BASE;?>/public/assets/js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38955291-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
