<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;
	use libs\Validation;

	class Cliente extends Controller {

		private $valida;
		public function __construct(){
			parent::__construct();
			$this->valida = new Validation();
			$this->loadModel();
		}

		public function mostrar_clientes(){
			try{
			$clientes=$this->model->listarInventarios();
			$this->view->render(explode("\\",get_class($this))[1], "mostrar_clientes", $clientes,$this->getErrores());
		}
		catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function eliminar_cliente($params=array()){
			try {
				$this->model->eliminarCliente($params['identificadorr']);
				echo "<script language='javascript'>"; 
				echo "alert('Cliente eliminado correctamente.')"; 
				echo "</script>";
				$this->cliente_inicio();
				
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}	  
		}

		public function modificar_cliente($params=array()){
			try{
			$b = $params['identificador'];
			if(count($params) > 0){
				$c = $this->model->getClienteById($params['identificador']);
				$d = $this->model->getClienteDireccionById($params['identificador']);
				$params1 = array();

				if(empty($c)){
					View::renderErrors(array("No existe el cliente con identificador ".$params['identificador']));
				}
				else{					
					
					$this->view->render3(explode("\\",get_class($this))[1], "modificar_cliente", $c[0], $d[0],$params, $this->getErrores());
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

		public function actualizar_cliente($params=array()){
			try{
			if(isset($params['dni']) && isset($params['nombre']) && isset($params['aPaterno']) && isset($params['aMaterno']) && isset($params['fechaNacimiento']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])){
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

				    $this->valida->validaTexto($nombre, 2, 45, true, 'El nombre');
				    $this->valida->validaTexto($aPaterno, 2, 45, true, 'El apellido paterno');
				    $this->valida->validaTexto($aMaterno, 2, 45, true, 'El apellido materno');
				    $this->valida->validaFecha($fechaNacimiento, 'La fecha');
				    $this->valida->validaTexto($ciudad, 2, 45, true, 'La ciudad');
				    $this->valida->validaTexto($colonia, 2, 45, true, 'La colonia');
				    $this->valida->validaTexto($calle, 2, 45, true, 'La calle');
				    $this->valida->validaNumeros($numero, 0, 900000, 'El numero');
				    $this->valida->validaNumeros($cp, 0, 900000, 'El CP');
				    $this->valida->validaTexto($detalle, 1, 500, true, 'Los detalles');

				    if(count($this->valida->getErroresValidacion()) == 0 ){
						$this->updateCliente($params);
						echo "<script language='javascript'>"; 
						echo "alert('Cliente actualizado correctamente.')"; 
						echo "</script>";  
						$this->cliente_inicio();
					}
					else{
						$this->view->render(explode("\\",get_class($this))[1], "mostrar_clientes",null,$this->valida->getErroresValidacion());
					}
				}
			}

			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}
		}


		public function cliente_inicio(){

			$this->view->render(explode("\\",get_class($this))[1], "cliente_inicio",$this->getErrores());

		}

		public function guardar($params=array()){

			try {

				if(isset($params['nombre']) && isset($params['aPaterno']) && isset($params['aMaterno']) && isset($params['fechaNacimiento']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])/*/*&& isset($params['DIRECCION_idDireccion'])*/){
					//$this->guardarDireccion($params1);

					//print_r($params);
					$this->crearInventario($params);
					
				}
				//Renderizando la vista asociada
				$this->view->render(explode("\\",get_class($this))[1], "guardar",$this->getErrores());
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
			
		}

		/*public function guardarDireccion($params1=array()){
			if (isset($params1['ciudad']) && isset($params1['cp']) && isset($params1['colonia']) && isset($params1['calle']) && isset($params1['numero']) && isset($params1['detalle'])) {
				//array_push($params1, var)
				echo "bbb";
			}
		}*/

		public function updateCliente($params){
			try{
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

		    $this->valida->validaTexto($nombre, 2, 45, true, 'El nombre');
			$this->valida->validaTexto($aPaterno, 2, 45, true, 'El apellido paterno');
			$this->valida->validaTexto($aMaterno, 2, 45, true, 'El apellido materno');
			$this->valida->validaFecha($fechaNacimiento, 'La fecha');
			$this->valida->validaTexto($ciudad, 2, 45, true, 'La ciudad');
			$this->valida->validaTexto($colonia, 2, 45, true, 'La colonia');
			$this->valida->validaTexto($calle, 2, 45, true, 'La calle');
			$this->valida->validaNumeros($numero, 0, 900000, 'El numero');
			$this->valida->validaNumeros($cp, 0, 900000, 'El CP');
			$this->valida->validaTexto($detalle, 1, 500, true, 'Los detalles');

			if(count($this->valida->getErroresValidacion()) == 0 ){
		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->actualizarCliente($dni,$nombre, $aPaterno, $aMaterno, $fechaNacimiento,$ciudad,$cp,$colonia,$calle,$numero,$detalle);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
		}
		else{
			$this->view->render(explode("\\",get_class($this))[1], "guardar",null,$this->valida->getErroresValidacion());
		}
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}

		}


		

		public function crearInventario($params){
			try{
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


		        $this->valida->validaTexto($nombre, 2, 45, true, 'El nombre');
		    	$this->valida->validaTexto($aPaterno, 2, 45, true, 'El apellido paterno');
		    	$this->valida->validaTexto($aMaterno, 2, 45, true, 'El apellido materno');
		    	$this->valida->validaFecha($fechaNacimiento, 'La fecha');
		    	$this->valida->validaTexto($ciudad, 2, 45, true, 'La ciudad');
		    	$this->valida->validaTexto($colonia, 2, 45, true, 'La colonia');
		    	$this->valida->validaTexto($calle, 2, 45, true, 'La calle');
		    	$this->valida->validaNumeros($numero, 0, 900000, 'El numero');
		    	$this->valida->validaNumeros($cp, 0, 900000, 'El CP');
		    	$this->valida->validaTexto($detalle, 1, 500, true, 'Los detalles');

		    if(count($this->valida->getErroresValidacion()) == 0 ){
		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearInventario($nombre, $aPaterno, $aMaterno, $fechaNacimiento,$ciudad,$cp,$colonia,$calle,$numero,$detalle/*,$DIRECCION_idDireccion*/);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
		}
		else{
			$this->view->render(explode("\\",get_class($this))[1], "guardar",null,$this->valida->getErroresValidacion());
		}
		}
			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}	
	}
}

?>