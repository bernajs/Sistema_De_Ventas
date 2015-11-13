<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
                <h2> Registrar proveedor</h2>
               
                <h5>(Registra un proveedor en el sistema)</h5>
                 <br>
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Nuevo Proveedor </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="RFC" type="text">
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="Nombre" type="text">
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="Teléfono" type="text">
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="Representante legal" type="text">
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="Fax" type="text">
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="Email" type="text">
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="Página web" type="text">
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="Observaciones" type="text">
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" placeholder="Dirección" type="text">
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['ciudad'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" type="text">
                                            <?php if(isset($this->errores['ciudad'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['ciudad'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['cp'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="cp" id="cp" placeholder="C.P." type="number">
                                            <?php if(isset($this->errores['cp'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['cp'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['colonia'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="colonia" id="colonia" placeholder="Colonia" type="text">
                                            <?php if(isset($this->errores['colonia'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['colonia'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['calle'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="calle" id="calle" placeholder="Calle" type="text">
                                            <?php if(isset($this->errores['calle'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['calle'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['numero'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="numero" id="numero" placeholder="Numero" type="number">
                                            <?php if(isset($this->errores['numero'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['numero'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['detalle'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="detalle" id="detalle" placeholder="Detalles" type="text">
                                            <?php if(isset($this->errores['detalle'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['detalle'];?></span><?php endif;?>
                                        </div>


                                      
                                     
                                     
                                     <a href="index_proveedores.html" class="btn btn-success ">Guardar</a>
                                    
                                    
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