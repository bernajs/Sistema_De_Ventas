<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;

	class Cliente extends Controller {

		public function __construct(){
			parent::__construct();
			$this->loadModel();
		}

		/*public function listarInventario(){
			$this->view->render(explode("\\", get_class($this))[1], "listar", $this->getErrores);
		}*/

		public function mostrar_clientes(){
			$clientes=$this->model->listarInventarios();
			$this->view->render(explode("\\",get_class($this))[1], "mostrar_clientes", $clientes,$this->getErrores());
		}

		public function eliminar_cliente($params=array()){

			$b = $params['identificadorr'];
			echo "<script language='javascript'>"; 
						echo "alert('$b')"; 
						echo "</script>";
			if (count($params) > 0) {
				$this->model->eliminarCliente($params['identificador']);
				echo "<script language='javascript'>"; 
						echo "alert('Cliente eliminado correctamente.')"; 
						echo "</script>";
						$this->cliente_inicio();
			}
			  
		}
		public function modificar_cliente($params=array()){
			$b = $params['identificador'];
			echo "<script language='javascript'>"; 
						echo "alert('$b')"; 
						echo "</script>";
			if(count($params) > 0){
				$c = $this->model->getClienteById($params['identificador']);
				$d = $this->model->getClienteDireccionById($params['identificador']);
				//$var = $params['identificador'];
				//print_r($params);
				$params1 = array();

				//var_dump($d);
				if(empty($c)){
					View::renderErrors(array("No existe el cliente con identificador ".$params['identificador']));
				}
				else{					
					
					$this->view->render3(explode("\\",get_class($this))[1], "modificar_cliente", $c[0], $d[0],$params, $this->getErrores());

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

		public function actualizar_cliente($params=array()){
			//echo "hola";
			if(isset($params['dni']) && isset($params['nombre']) && isset($params['aPaterno']) && isset($params['aMaterno']) && isset($params['fechaNacimiento']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])){
						//$this->guardarDireccion($params1);
						//echo "HOLA";
						//print_r($params);
						$this->updateCliente($params);
						echo "<script language='javascript'>"; 
						echo "alert('Cliente actualizado correctamente.')"; 
						echo "</script>";  
						//echo "Usuario actualizado correctamente";
						$this->cliente_inicio();
				
				}
		}


		public function cliente_inicio(){

			$this->view->render(explode("\\",get_class($this))[1], "cliente_inicio",$this->getErrores());

		}

		public function guardar($params=array()){
			//Llamando al metodo del modelo
			//echo "jeje";
			//print_r($params1);
			if(isset($params['nombre']) && isset($params['aPaterno']) && isset($params['aMaterno']) && isset($params['fechaNacimiento']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])/*/*&& isset($params['DIRECCION_idDireccion'])*/){
				//$this->guardarDireccion($params1);

				print_r($params);
				$this->crearInventario($params);
				
			}
			//Renderizando la vista asociada
			$this->view->render(explode("\\",get_class($this))[1], "guardar",$this->getErrores());
		}

		/*public function guardarDireccion($params1=array()){
			if (isset($params1['ciudad']) && isset($params1['cp']) && isset($params1['colonia']) && isset($params1['calle']) && isset($params1['numero']) && isset($params1['detalle'])) {
				//array_push($params1, var)
				echo "bbb";
			}
		}*/

		public function updateCliente($params){
			$dni = $params['dni'];
			$nombre = $params['nombre'];
		    $aPaterno = $params['aPaterno'];
		    $aMaterno = $params['aMaterno'];
		    $fechaNacimiento = $params['fechaNacimiento'];
		    $ciudad = $params['ciudad'];
		    $cp = $params['cp'];
		    $colonia = $params['colonia'];
		    $calle = $params['calle'];
		    $numero = $params['numero'];
		    $detalle = $params['detalle'];

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->actualizarCliente($dni,$nombre, $aPaterno, $aMaterno, $fechaNacimiento,$ciudad,$cp,$colonia,$calle,$numero,$detalle);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }

		}


		

		public function crearInventario($params){
			
		    $nombre = $params['nombre'];
		    $aPaterno = $params['aPaterno'];
		    $aMaterno = $params['aMaterno'];
		    $fechaNacimiento = $params['fechaNacimiento'];
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
		        	$this->model->crearInventario($nombre, $aPaterno, $aMaterno, $fechaNacimiento,$ciudad,$cp,$colonia,$calle,$numero,$detalle/*,$DIRECCION_idDireccion*/);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
				
		}
	}

?>