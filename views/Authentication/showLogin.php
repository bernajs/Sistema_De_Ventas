<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login - Sistema ejemplo</title>
    <!--Raleigh Font-->    
    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="<?php echo URL_BASE;?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL_BASE;?>/public/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<body>

<div class="middlePage">
<div class="page-header">
  <h1 class="logo">AEXPress <small>Welcome to our place!</small></h1>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Por favor, identificarse</h3>
  </div>
  <div class="panel-body">
  
  <div class="row">
  
<div class="col-md-5" >
<a href="#"><img src="http://techulus.com/buttons/fb.png" /></a><br/>
<a href="#"><img src="http://techulus.com/buttons/tw.png" /></a><br/>
<a href="#"><img src="http://techulus.com/buttons/gplus.png" /></a>
</div>

<div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
  <form method="POST" novalidate class="form-horizontal" action="<?php echo URL_BASE;?>/index.php/Authentication/login">
    <fieldset>

      <input name="username" type="text" data-validation-required-message="Campo es requerido por favor" required placeholder="Introduzca nombre de usuario" class="form-control input-md">
      <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Recuerdame</small></div>
      <input name="email" type="email" data-validation-required-message="Campo es requerido por favor" required placeholder="Introduzca email" class="form-control input-md">
      <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Recuerdame</small></div>
      <input name="password" data-validation-required-message=
    "You must agree to the terms and conditions" required type="password" placeholder="Introduzca contrase&ntilde;a" class="form-control input-md">
      <div class="spacing"><a href="#"><small> Olvid&oacute; la contrase&ntilde;a?</small></a><br/></div>
      
      <button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Entrar</button>

      
    </fieldset>
  </form>
</div>
    
</div>
    
</div>
</div>

<p><a href="https://github.com/arjunkomath">About</a> · Arjun</p>

</div>

<!--Javascripts-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/jqBootstrapValidation.js"></script>
    
    <script type="text/javascript">
        //$(function () { 
            //$("input,select,textarea").jqBootstrapValidation({
              //  preventSubmit: true,
                //submitError: function($form, event, errors) {
                    // Here I do nothing, but you could do something like display 
                    // the error messages to the user, log, etc.
                //},
                //submitSuccess: function($form, event) {
                  //  alert("OK");
                    //event.preventDefault();
                //},
                //filter: function() {
                  //  return $(this).is(":visible");
                //}
            //});
        //});
    </script>
</body>
</html>