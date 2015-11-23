<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;

	class Proveedor extends Controller {

		public function __construct(){
			parent::__construct();
			$this->loadModel();

			
		}

		public function proveedor_inicio(){
			try{
			$this->view->render(explode("\\",get_class($this))[1], "proveedor_inicio",$this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function mostrar_proveedores(){
			try{
			$proveedores=$this->model->listarInventarios();
			$this->view->render(explode("\\",get_class($this))[1], "mostrar_proveedores", $proveedores,$this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function eliminar_proveedor($params=array()){
			try {
				$this->model->eliminarProveedor($params['identificadorr']);
				echo "<script language='javascript'>"; 
				echo "alert('Proveedor eliminado correctamente.')"; 
				echo "</script>";
				$this->proveedor_inicio();
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function modificar_proveedor($params=array()){
			try{
				if(count($params) > 0){
					$p = $this->model->getProveedorById($params['identificador']);
					$d = $this->model->getProveedorDireccionById($params['identificador']);
					//$var = $params['identificador'];

					//var_dump($d);
					if(empty($p)){
						View::renderErrors(array("No existe el proveedor con identificador ".$params['identificador']));
					}
					else{
						$this->view->render3(explode("\\",get_class($this))[1], "modificar_proveedor", $p[0], $d[0],$params, $this->getErrores());
						//if(isset($params['nombre']) && isset($params['aPaterno']) && isset($params['aMaterno']) && isset($params['fechaNacimiento']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])/*/*&& isset($params['DIRECCION_idDireccion'])*/){
							//$this->guardarDireccion($params1);

						/*	print_r($params);
							$this->updateCliente($params);
					
						}*/
					}
					
				}
				else{
					
					View::renderErrors(array("No se envio el identificador del cliente"));	
				}
			}
			catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
			
		}

		public function actualizar_proveedor($params=array()){
			try {
				if(isset($params['rfc']) && isset($params['nombre']) && isset($params['telefono']) && isset($params['representanteLegal']) && isset($params['fax']) && isset($params['correoElectronico']) && isset($params['webProveedor']) && isset($params['observaciones']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])){
					//$this->guardarDireccion($params1);

					//print_r($params);
					$this->updateProveedor($params);
					echo "<script language='javascript'>"; 
					echo "alert('Proveedor actualizado correctamente.')"; 
					echo "</script>";
					$this->proveedor_inicio();
				
				}
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function updateProveedor($params){
			try {
				echo "<script language='javascript'>"; 
				echo "alert('HOLI.')"; 
				echo "</script>";
				$rfc = $params['rfc'];
			    $nombre = $params['nombre'];
			    $telefono = $params['telefono'];
			    $representanteLegal = $params['representanteLegal'];
			    $fax = $params['fax'];
			    $correoElectronico = $params['correoElectronico'];
			    $webProveedor = $params['webProveedor'];
			    $observaciones = $params['observaciones'];
			    $ciudad = $params['ciudad'];
			    $cp = $params['cp'];
			    $colonia = $params['colonia'];
			    $calle = $params['calle'];
			    $numero = $params['numero'];
			    $detalle = $params['detalle'];	

			    if(count($this->errores) ==0 ){
			    	try{
			        	$this->model->actualizarProveedor($rfc,$nombre,$telefono,$representanteLegal,$fax,$correoElectronico,$webProveedor,$observaciones,$ciudad,$cp,$colonia,$calle,$numero,$detalle);
			    	}
			    	catch(\Exception $e){
						$this->errores['global']=$e->getMessage();
					}
		    	}			
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}		

		public function guardar_proveedor($params=array()){
			try{
			if(isset($params['rfc']) && isset($params['nombre']) && isset($params['telefono']) && isset($params['representanteLegal']) && isset($params['fax']) && isset($params['correoElectronico']) && isset($params['webProveedor']) && isset($params['observaciones']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])){
				//$this->guardarDireccion($params1);

				//print_r($params);
				$this->crearProveedor($params);
				
			}
			//Renderizando la vista asociada
			$this->view->render(explode("\\",get_class($this))[1], "guardar_proveedor",$this->getErrores());			
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function crearProveedor($params){
			try{
		    $rfc = $params['rfc'];
		    $nombre = $params['nombre'];
		    $telefono = $params['telefono'];
		    $representanteLegal = $params['representanteLegal'];
		    $fax = $params['fax'];
		    $correoElectronico = $params['correoElectronico'];
		    $webProveedor = $params['webProveedor'];
		    $observaciones = $params['observaciones'];
		    $ciudad = $params['ciudad'];
		    $cp = $params['cp'];
		    $colonia = $params['colonia'];
		    $calle = $params['calle'];
		    $numero = $params['numero'];
		    $detalle = $params['detalle'];
		    //$DIRECCION_idDireccion=$params['DIRECCION_idDireccion'];

		    /*if(!is_numeric($dia)){
		        $this->errores['dia']="Oye el dia no es un numero, no seas bobo chico";
		        
		    }
		    
		    if(!is_numeric($demanda)){
		        $this->errores['demanda']="Oye la demanda no es un numero, no seas bobo chico";
		        
		    }

		    if(!is_numeric($produccion)){
		        $this->errores['produccion']="Oye la produccion no es un numero, analiza";
		        
		    }*/

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearProveedor($rfc,$nombre,$telefono,$representanteLegal,$fax,$correoElectronico,$webProveedor,$observaciones,$ciudad,$cp,$colonia,$calle,$numero,$detalle/*,$DIRECCION_idDireccion*/);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
				
		}
	}