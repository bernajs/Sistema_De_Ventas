<div class="row text-center  ">
      <div class="col-md-12">
        
        <h2> Modificar pedido</h2>
        
        
        
      </div>
    </div>
    <div class="row">
      
      <div class="col-md-12 col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>Pedido</strong>
          </div>
          <?php $p = $this->getDatos();/*$var=$this->getDatos2();*/?>
          <div class="panel-body">
            <form role="form" class="form" id="form1"method="POST" action="<?php echo URL_BASE;?>/index.php/Pedido/actualizar_pedido">
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
                <input class="form-control" name="fecha" id="fecha" placeholder="Fecha" type="text" value="<?php echo $p->fecha;?>">
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
                <input class="form-control" name="direccionEnvio" id="direccionEnvio" placeholder="Direccion de Envio" type="text" value="<?php echo $p->direccionEnvio;?>">
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
                  

                  <!--<input class='form-control pro' name='cantProducto' id='cantProducto' placeholder='Cantidad' type='text'>-->
                  <!--<?php //if(isset($this->errores['cantProducto'])) :?> <span id='helpBlock' class='help-block'><?php //echo $this->errores['cantProducto'];?></span><?php //endif;?>-->
                </select>                  

                </div> 
                </div>

                <div class="form-group input-group <?php if (isset($this->errores['cantProducto'])) echo 'has-error' ; ?>">
                <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                <input class="form-control" name="cantProducto" id="cantProducto" placeholder="Cantidad de producto" type="text">
                <?php if(isset($this->errores['cantProducto'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['cantProducto'];?></span><?php endif;?>
              </div>               

                <script>
                /*var counter = 2;
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

                }*/
                </script>

                

              <!--</div>-->
              
              <!--</form>-->
              <!--<div class="pro form-group input-group <?php //if (isset($this->errores['cantProducto'])) echo 'has-error' ; ?>">
                <span class="pro input-group-addon"><i class="fa fa-genderless"></i>--><!--</span>-->
                <!--<input class="form-control pro" name="cantProducto" id="cantProducto" placeholder="Cantidad" type="text">
                <?php //if(isset($this->errores['cantProducto'])) :?> <span id="helpBlock" class="help-block"><?php //echo $this->errores['cantProducto'];?></span><?php //endif;?>
              </div>-->

              <!--<input type="button" value="Add another text input" onClick="addInput('dynamicInput');">-->

              <!--<style>
                .pro{
                  display: inline-block;
                }
              </style>-->
              
              
              
              <button name="enviarDatos" id="sendBtn" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Guardar</button>
              
              
            </form>
          </div>
          
        </div>
      </div>
      
      
    </div>