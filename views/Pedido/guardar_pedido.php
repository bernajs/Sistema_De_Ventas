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
   <link href="<?php echo URL_BASE."/public/assets/css/bootstrap-datetimepicker.min.css";?>" rel="stylesheet">


</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                
                <h2> Registrar pedido</h2>
               
                <h5>(Registra un pedido en el sistema)</h5>
                 <br>
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>Nuevo Pedido</strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">

                                  <div class="form-group">
                                    <label for="dni">Cliente</label>
                                      <select class="form-control" name="dni" id="dni">
                                        <?php $datos=$this->getDatos();foreach ($datos as $key => $cliente):?> 
                                          <option value="<?php echo $cliente->dni;?>"><?php echo $cliente->nombre;?></option>
                                        <?php endforeach;?>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                    <label>Forma de Pago</label>
                                      <select class="form-control" name="formaPago" id="formaPago">
                                        <option value="Credito">Crédito</option>
                                        <option value="Contado">Contado</option>
                                        <option value="Cheque">Cheque</option>
                                      </select>
                                  </div>

                                  <div class="form-group input-group <?php if (isset($this->errores['fecha'])) echo 'has-error' ; ?>">
                                    <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                      <input class="form-control" name="fecha" id="fecha" placeholder="Fecha" type="text">
                                    <?php if(isset($this->errores['fecha'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['fecha'];?></span><?php endif;?>
                                  </div>

                                  <div class="form-group">
                                    <label>Estado</label>
                                      <select class="form-control" name="estado" id="estado">
                                        <option value="Entregado">Entregado</option>
                                        <option value="No Entregado">No Entregado</option>
                                        <option value="Pagado">Pagado</option>
                                        <option value="Retrasado">Retrasado</option>
                                      </select>
                                  </div>

                                  <div class="form-group input-group <?php if (isset($this->errores['direccionEnvio'])) echo 'has-error' ; ?>">
                                    <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                      <input class="form-control" name="direccionEnvio" id="direccionEnvio" placeholder="Direccion de Envio" type="text">
                                    <?php if(isset($this->errores['direccionEnvio'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['direccionEnvio'];?></span><?php endif;?>
                                  </div>                                                                           
                                        
                                      
                                      <!--<form class="form-inline" role="form">-->
                                  <div class="form-group">
                                    <label for="PRODUCTO_codigo">Producto</label>
                                      <select class="form-control" name="PRODUCTO_codigo" id="PRODUCTO_codigo">
                                        <?php $datos=$this->getDatos();foreach ($datos as $key => $producto):?> 
                                          <option value="<?php echo $producto->codigo;?>"><?php echo $producto->nombre;?></option>
                                        <?php endforeach;?>
                                      </select>
                                  </div>
                                      
                                      <!--</form>-->
                                  <div class="form-group input-group <?php if (isset($this->errores['cantProducto'])) echo 'has-error' ; ?>">
                                    <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                      <input class="form-control" name="cantProducto" id="cantProducto" placeholder="Direccion de Envio" type="text">
                                    <?php if(isset($this->errores['cantProducto'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['cantProducto'];?></span><?php endif;?>
                                  </div>                                     



                                      
                                     
                                     
                                  <button name="enviarDatos" id="sendBtn" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Guardar</button>
                                    
                                    
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
    <script src="<?php echo URL_BASE."/public/assets/js/moment.js";?>"></script>
    <script src="<?php echo URL_BASE."/public/assets/js/moment-locale-es.js";?>"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38955291-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" scr="<?php echo URL_BASE."/public/assets/js/bootstrap-datetimepicker.min.js";?>"></script>
<script type="text/javascript">
            $(function () {              
                $('#datetimepicker1').datetimepicker();
            });
    </script>

</body>
</html>