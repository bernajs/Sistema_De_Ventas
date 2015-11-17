
        <div class="row text-center  ">
            <div class="col-md-12">
                
                <h2>Modificar producto</h2>             
                
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>Producto</strong>  
                            </div>

                            <?php $p = $this->getDatos();?>
                            <div class="panel-body">
                                <form role="form" class="form" id="form1" method="POST">
                                        <div class="form-group input-group <?php if (isset($this->errores['nombre'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="nombre" id="nombre" placeholder="Nombre del producto" type="text" value="<?php echo $p->nombre;?>">
                                            <?php if(isset($this->errores['nombre'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['nombre'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['precioUnitario'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="precioUnitario" id="precioUnitario" placeholder="Precio Unitario" type="text" value="<?php echo $p->precioUnitario;?>">
                                            <?php if(isset($this->errores['precioUnitario'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['precioUnitario'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['descripcion'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" type="text" value="<?php echo $p->descripcion;?>">
                                            <?php if(isset($this->errores['descripcion'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['descripcion'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['cantidad'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad" type="text" value="<?php echo $p->cantidad;?>">
                                            <?php if(isset($this->errores['cantidad'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['cantidad'];?></span><?php endif;?>
                                        </div>                                
                                                                                                                                                              
                                        
                                     
                                     
                                     <button name="enviarDatos" id="sendBtn" type="submit" class="btn btn-warning btn-lg" style="width: 100%"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    