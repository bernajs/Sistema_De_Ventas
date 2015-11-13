<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/bootstrap.css";?>" rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/font-awesome.css";?>" rel="stylesheet">
        <!-- CUSTOM STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/custom.css";?>" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br><br>
                <h2>Registrar producto</h2>
               
                <h5>(Registre todos sus productos)</h5>
                 <br>
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Nuevo Producto </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" placeholder="Nombre del Producto" type="text">
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input class="form-control" placeholder="Precio unitario" type="text">
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                            <input class="form-control" placeholder="Descripción" type="text">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                            <input class="form-control" placeholder="Cantidad" type="number" min="1">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                            <input class="form-control" placeholder="Proveedor" type="text">
                                        </div>
                                     
                                     
                                     <a href="index_usuarios.html" class="btn btn-success ">Guardar</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="//www.google-analytics.com/analytics.js" async=""></script>
    <script src="<?php echo URL_BASE."/public/assets/js/jquery-1.10.2.js";?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo URL_BASE."/public/assets/js/bootstrap.min.js";?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo URL_BASE."/public/assets/js/jquery.metisMenu.js";?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo URL_BASE."/public/assets/js/custom.js";?>"></script>
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