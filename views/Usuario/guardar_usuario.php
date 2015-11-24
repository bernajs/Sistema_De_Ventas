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
        <h2> Regístrate</h2>
        
        <h5>( Regístrate para poder acceder al sistema)</h5>
        <br>
      </div>
    </div>
    <div class="row">
      
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>Nuevo Usuario</strong>
          </div>
          <div class="panel-body">
            <form role="form" class="form" id="form1" method="POST" action="">
              <div class="form-group input-group <?php if (isset($this->errores['usuario'])) echo 'has-error' ; ?>">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" name="usuario" id="usuario" placeholder="Usuario" type="text">
                <?php if(isset($this->errores['usuario'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['usuario'];?></span><?php endif;?>
              </div>
              <div class="form-group input-group <?php if (isset($this->errores['contrasenya'])) echo 'has-error' ; ?>">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" name="contrasenya" id="contrasenya" placeholder="Password" type="text">
                <?php if(isset($this->errores['contrasenya'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['contrasenya'];?></span><?php endif;?>
              </div>
              <div class="form-group input-group <?php if (isset($this->errores['nombre'])) echo 'has-error' ; ?>">
                <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                <input class="form-control" name="nombre" id="nombre" placeholder="Nombre" type="text">
                <?php if(isset($this->errores['nombre'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['nombre'];?></span><?php endif;?>
              </div>
              <div class="form-group input-group <?php if (isset($this->errores['apellidos'])) echo 'has-error' ; ?>">
                <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                <input class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" type="text">
                <?php if(isset($this->errores['apellidos'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['apellidos'];?></span><?php endif;?>
              </div>             
              
              <button name="enviarDatos" id="sendBtn" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Guardar</button>
              <!--<a onClick="if(confirm('¿Desea registrar este usuario?'))
                alert('Guardado');
              else alert('No Guardado')" data-toggle="modal" class="btn btn-success" type="submit" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Guardar</a>-->
              <hr>
              ¿Ya estás registrado?  <a href="<?php echo URL_BASE;?>/index.php/Inicio/login">Entra aquí</a>
            </form>
          </div>
          
        </div>
      </div>
      
      
    </div>
  </div>
  <!-- <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Guardar usuario</h3>
    </div>
    <div class="modal-body">
      <p class="error-text">¿Está seguro que desea guardar este usuario?</p>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
      <button class="btn btn-danger" data-dismiss="modal">Guardar</button>
    </div>
  </div>-->
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