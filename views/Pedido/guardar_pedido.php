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
            <form role="form" class="form" id="form1"method="POST" action="">
              <div class="form-group">
                <label for="CLIENTE_dni">Cliente</label>
                <select class="form-control" name="CLIENTE_dni" id="CLIENTE_dni">
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
              <div class="form-group pro" id="form-pedido">
                <label for="PRODUCTO_codigo">Producto</label>
                <div id="dynamicInput">
                  <select class="form-control" name="PRODUCTO_codigo" id="PRODUCTO_codigo">
                  <?php $datos1=$this->getDatos1();$a=1;foreach ($datos1 as $key => $producto):?>
                  <option value="<?php echo $producto->codigo;?>"><?php echo $producto->nombre;?></option>
                  <?php endforeach;?>  
                  

                  <input class='form-control pro' name='cantProducto' id='cantProducto' placeholder='Cantidad' type='text'>
                  <?php if(isset($this->errores['cantProducto'])) :?> <span id='helpBlock' class='help-block'><?php echo $this->errores['cantProducto'];?></span><?php endif;?>
                </select>                  

                </div>                

                <script>
                var counter = 2;
                var id=0;
                var limit = 21;

                function addInput(divName){

                     if (counter >= limit)  {
                          alert("You have reached the limit of adding " + counter + " inputs");
                     }

                     else {

                          var x = document.createElement('select');
                          x.setAttribute("name","selector[]");
                          x.setAttribute("id","selector");

                          x.setAttribute("class","form-control");
                          x.setAttribute("name","PRODUCTO_codigo");
          
                          <?php $datos2=$this->getDatos2();foreach ($datos2 as $key => $producto2):?>
                         //alert(<?php echo $key; ?>);
                        // newdiv.innerHTML = "Producto " + (counter) + "<select class='form-control' name='PRODUCTO_codigo' id='PRODUCTO_codigo'><option value='<?php echo $producto2->codigo;?>'><?php echo $producto2->nombre;?></option>";
                        var option = document.createElement("option");
                        option.setAttribute("value","<?php echo $producto2->nombre; ?>");
                        option.text = "<?php echo $producto2->nombre; ?>";
                        x.add(option);
                        document.getElementById(divName).appendChild(x);
                        <?php endforeach;?>


                        var input = document.createElement("input");
                        input.type = "text";
                        input.className = "form-control pro";
                        input.placeholder="Producto";
                        input.id=id;
                        id++;
                        document.getElementById("dynamicInput").appendChild(input);

                        var br=document.createElement("hr");

                        document.getElementById("dynamicInput").appendChild(br);

                          counter++;
                     }

                }
                </script>

                

              </div>
              
              <!--</form>-->
              <!--<div class="pro form-group input-group <?php //if (isset($this->errores['cantProducto'])) echo 'has-error' ; ?>">
                <span class="pro input-group-addon"><i class="fa fa-genderless"></i>--><!--</span>-->
                <!--<input class="form-control pro" name="cantProducto" id="cantProducto" placeholder="Cantidad" type="text">
                <?php //if(isset($this->errores['cantProducto'])) :?> <span id="helpBlock" class="help-block"><?php //echo $this->errores['cantProducto'];?></span><?php //endif;?>
              </div>-->

              <input type="button" value="Add another text input" onClick="addInput('dynamicInput');">

              <style>
                .pro{
                  display: inline-block;
                }
              </style>
              <br><br>
              
              
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