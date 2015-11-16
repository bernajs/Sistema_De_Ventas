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

			$this->view->render(explode("\\",get_class($this))[1], "proveedor_inicio",$this->getErrores());

		}

		public function guardar_proveedor($params=array()){
			if(isset($params['rfc']) && isset($params['nombre']) && isset($params['telefono']) && isset($params['representanteLegal']) && isset($params['fax']) && isset($params['correoElectronico']) && isset($params['webProveedor']) && isset($params['observaciones']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])/*/*&& isset($params['DIRECCION_idDireccion'])*/){
				//$this->guardarDireccion($params1);

				print_r($params);
				$this->crearProveedor($params);
				
			}
			//Renderizando la vista asociada
			$this->view->render(explode("\\",get_class($this))[1], "guardar_proveedor",$this->getErrores());			
		}

		public function crearProveedor($params){
			
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
	}