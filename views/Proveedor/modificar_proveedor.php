
        <div class="row text-center  ">
            <div class="col-md-12">                
                <h2> Modificar proveedor</h2>              
                                
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-12 col-sm-12 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>Proveedor</strong>  
                            </div>

                            <?php $p = $this->getDatos(); $d=$this->getDatos1(); ?>

                            <div class="panel-body">
                                <form role="form" class="form" id="form1" method="POST" action="">

                                        <div class="form-group input-group <?php if (isset($this->errores['rfc'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="rfc" id="rfc" placeholder="RFC" type="text" value="<?php echo $p->rfc;?>">
                                            <?php if(isset($this->errores['rfc'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['rfc'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['nombre'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="nombre" id="nombre" placeholder="Nombre" type="text" value="<?php echo $p->nombre;?>">
                                            <?php if(isset($this->errores['nombre'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['nombre'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['telefono'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="telefono" id="telefono" placeholder="Telefono" type="text" value="<?php echo $p->telefono;?>">
                                            <?php if(isset($this->errores['telefono'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['telefono'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['representanteLegal'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="representanteLegal" id="representanteLegal" placeholder="representante Legal" type="text" value="<?php echo $p->representanteLegal;?>">
                                            <?php if(isset($this->errores['representanteLegal'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['representanteLegal'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['fax'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="fax" id="fax" placeholder="Fax" type="text" value="<?php echo $p->fax;?>">
                                            <?php if(isset($this->errores['fax'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['fax'];?></span><?php endif;?>
                                        </div> 
                                        <div class="form-group input-group <?php if (isset($this->errores['correoElectronico'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="correoElectronico" id="correoElectronico" placeholder="Email" type="text" value="<?php echo $p->correoElectronico;?>">
                                            <?php if(isset($this->errores['correoElectronico'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['correoElectronico'];?></span><?php endif;?>
                                        </div>     
                                        <div class="form-group input-group <?php if (isset($this->errores['webProveedor'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="webProveedor" id="webProveedor" placeholder="Pagina web" type="text" value="<?php echo $p->webProveedor;?>">
                                            <?php if(isset($this->errores['webProveedor'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['webProveedor'];?></span><?php endif;?>
                                        </div>  
                                        <div class="form-group input-group <?php if (isset($this->errores['observaciones'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="observaciones" id="observaciones" placeholder="Observaciones" type="text" value="<?php echo $p->observaciones;?>">
                                            <?php if(isset($this->errores['observaciones'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['observaciones'];?></span><?php endif;?>
                                        </div>                                                                                                               
                                                                            
                                        <div class="form-group input-group <?php if (isset($this->errores['ciudad'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" type="text" value="<?php echo $d->ciudad;?>">
                                            <?php if(isset($this->errores['ciudad'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['ciudad'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['cp'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="cp" id="cp" placeholder="C.P." type="number" value="<?php echo $d->cp;?>">
                                            <?php if(isset($this->errores['cp'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['cp'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['colonia'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="colonia" id="colonia" placeholder="Colonia" type="text" value="<?php echo $d->colonia;?>">
                                            <?php if(isset($this->errores['colonia'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['colonia'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['calle'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="calle" id="calle" placeholder="Calle" type="text" value="<?php echo $d->calle;?>">
                                            <?php if(isset($this->errores['calle'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['calle'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['numero'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="numero" id="numero" placeholder="Numero" type="number" value="<?php echo $d->numero;?>">
                                            <?php if(isset($this->errores['numero'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['numero'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['detalle'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="detalle" id="detalle" placeholder="Detalles" type="text" value="<?php echo $d->detalle;?>">
                                            <?php if(isset($this->errores['detalle'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['detalle'];?></span><?php endif;?>
                                        </div>


                                      
                                     
                                     
                                     <button name="enviarDatos" id="sendBtn" type="submit" class="btn btn-warning btn-lg" style="width: 100%"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                                    
                                    
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
   