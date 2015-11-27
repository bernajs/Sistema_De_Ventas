<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" type="image/png" href="<?php echo URL_BASE;?>/public/images/icon.png" />
        <title>Guardando datos con HTML y PHP-PDO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Url tracker system"/>
        <meta name="author" content="author@gmail.com"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="css?family=Tangerine">

        <!-- Bootstrap -->
        <link href="<?php echo URL_BASE."/public/css/bootstrap.min.css";?>" rel="stylesheet" media="screen">

        </head>
    <body>
        <div class="container">
        <?php $errores = $this->getErrores();
            if(count($errores) > 0):?>
            <div class="alert alert-danger" role="alert">

            <?php foreach ($errores as  $error):?>
                <b><?php echo $error;?></b><br/>
            <?php endforeach;?>
            </div>
        <?php endif;?>
        
            <div class="row">
                <form role="form" class="form" id="form1" method="POST" action="">                
                <div class="form-group <?php if (isset($this->errores['dia'])) echo 'has-error' ; ?>">
                    <label for="dia">D&iacute;a:</label>
                    <input type="number" data-validation-required-message="Por favor llene este campo" required data-validation-number-message="Debe ser un n&uacute;mero" autofocus class="form-control" name="dia" id="dia" value="1" placeholder="1" min="1" max="10000000" step="1">
                    <?php if(isset($this->errores['dia'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['dia'];?></span><?php endif;?>
                </div>                
                <div class="form-group <?php if (isset($this->errores['demanda'])) echo 'has-error' ; ?>">
                    <label for="demanda">Demanda:</label>
                    <input type="number" required class="form-control"  value="1" name="demanda" id="demanda" placeholder="1" min="1" max="10000000" step="1">
                    <?php if(isset($this->errores['demanda'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['demanda'];?></span><?php endif;?>
                </div>                

                <div class="form-group <?php if (isset($this->errores['produccion'])) echo 'has-error' ; ?>">
                    <label for="produccion">Producci&oacute;n:</label>
                    <input type="number" required class="form-control"  value="1" name="produccion" id="produccion" placeholder="1" min="1" max="10000000" step="1">
                    <?php if(isset($this->errores['produccion'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['produccion'];?></span><?php endif;?>
                </div>
                                            
                <button name="enviarDatos" id="sendBtn" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Enviar</button>
                    
                </form>
            </div>
        </div>


    <!--Javascripts-->
    <script src="<?php echo URL_BASE;?>/public/js/jquery.js"></script>
    <script src="<?php echo URL_BASE;?>/public/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript">
        /*$(function () { 
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
                preventSubmit: true,
                submitError: function($form, event, errors) {
                    // Here I do nothing, but you could do something like display 
                    // the error messages to the user, log, etc.
                },
                submitSuccess: function($form, event) {
                    alert("OK");
                    event.preventDefault();
                },
                filter: function() {
                    return $(this).is(":visible");
                }
            });
        });*/
    </script>
    </body>
    </html>