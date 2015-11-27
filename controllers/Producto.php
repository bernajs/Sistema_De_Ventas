<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;
	use libs\Validation;

	class Producto extends Controller{

		private $valida;
		public function __construct(){
			parent::__construct();
			$this->valida = new Validation();
			$this->loadModel();
		}

		public function mostrar_productos(){
			try{
			$productos=$this->model->listarProductos();
			$this->view->render(explode("\\",get_class($this))[1], "mostrar_productos", $productos,$this->getErrores());
		}
			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}
		}


		public function modificar_producto($params=array()){
			try{
			if(count($params) > 0){
				$p = $this->model->getProductoById($params['identificador']);
				$proveedores=$this->model->listarInventarios();
				//$d = $this->model->getClienteDireccionById($params['identificador']);
				//$var = $params['identificador'];

				//var_dump($d);
				if(empty($p)){
					View::renderErrors(array("No existe el producto con identificador ".$params['identificador']));
				}
				else{
					$this->view->render3(explode("\\",get_class($this))[1], "modificar_producto", $p[0],$proveedores,$params, $this->getErrores());
					//if(isset($params['nombre']) && isset($params['aPaterno']) && isset($params['aMaterno']) && isset($params['fechaNacimiento']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])/*/*&& isset($params['DIRECCION_idDireccion'])*/){
						//$this->guardarDireccion($params1);

					/*	print_r($params);
						$this->updateCliente($params);
				
					}*/
				}
				
			}
			else{
				
				View::renderErrors(array("No se envio el identificador del producto"));	
			}
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
			
		}

		public function actualizar_producto($params=array()){
			try {
				if(isset($params['codigo']) && isset($params['nombre']) && isset($params['precioUnitario']) && isset($params['descripcion']) && isset($params['cantidad']) && isset($params['PROVEEDOR_rfc'])) {
				//$this->guardarProducto($params);
				//echo "lol";
				//print_r($params);
				$this->updateProducto($params);
				echo "<script language='javascript'>"; 
				echo "alert('Producto actualizado correctamente.')"; 
				echo "</script>"; 
				$this->producto_inicio();
				//$proveedores=$this->model->listarInventarios();
				//$this->crearProveedor($params);
				
				}				
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function updateProducto($params){
			try {
				$codigo = $params['codigo'];
				$nombre = $params['nombre'];
				$precioUnitario = $params['precioUnitario'];
				$descripcion = $params['descripcion'];
				$cantidad = $params['cantidad'];
				$PROVEEDOR_rfc = $params['PROVEEDOR_rfc'];


				    $this->valida->validaTexto($nombre, 2, 45, false, 'El nombre que ingresó');
				    $this->valida->validaNumeros($precioUnitario, 0, 90000, 'El precio ');
				    $this->valida->validaTexto($descripcion, 2, 45, true, 'La descripción');
				    $this->valida->validaNumeros($cantidad, 1, 45, 'La cantidad');


				    if(count($this->valida->getErroresValidacion()) == 0 ){
				if(count($this->errores) ==0 ){
			    	try{
			        	$this->model->actualizarProducto($codigo,$nombre,$precioUnitario,$descripcion,$cantidad,$PROVEEDOR_rfc);
			    	}
			    	catch(\Exception $e){
						$this->errores['global']=$e->getMessage();
					}
			    }
			    }	else{
					    	$this->view->render(explode("\\",get_class($this))[1], "mostrar_productos",null,$this->valida->getErroresValidacion());
					    	
					    }			
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function eliminar_producto($params=array()){
			try {
				//$b = $params['identificadorr'];
				//echo "<script language='javascript'>"; 
				//echo "alert('HOLA')"; 
				//echo "</script>";
				//echo "<script language='javascript'>"; 
				//echo "alert('$b')"; 
				//echo "</script>";
				//if (count($params) > 0) {
				$this->model->eliminarProducto($params['identificadorr']);
				echo "<script language='javascript'>"; 
				echo "alert('Producto eliminado correctamente.')"; 
				echo "</script>";
				$this->cliente_inicio();
				
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}

			
			//}
			  
		}		



		public function producto_inicio(){
			try{
			$this->view->render(explode("\\",get_class($this))[1], "producto_inicio",$this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function guardar_producto($params=array()){
			try{
			$proveedores=$this->model->listarInventarios();
			//var_dump($proveedores);
			//$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			
			//$this->guardar($params);
			if(isset($params['nombre']) && isset($params['precioUnitario']) && isset($params['descripcion']) && isset($params['cantidad']) && isset($params['PROVEEDOR_rfc'])) {
				//$this->guardarProducto($params);
				//echo "lol";
				//print_r($params);
				$this->guardarProducto($params);
				//$proveedores=$this->model->listarInventarios();
				//$this->crearProveedor($params);
				
			}
			$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function guardarProducto($params){
			try{
				$nombre = $params['nombre'];
			    $precioUnitario = $params['precioUnitario'];
			    $descripcion = $params['descripcion'];
			    $cantidad = $params['cantidad'];
			    $PROVEEDOR_rfc = $params['PROVEEDOR_rfc'];

			    $this->valida->validaTexto($nombre, 2, 45, true, 'El nombre que ingresó');
			    $this->valida->validaNumeros($precioUnitario, 0, 90000, 'El precio');
			    $this->valida->validaTexto($descripcion, 2, 45, true, 'La descripción');
			    $this->valida->validaNumeros($cantidad, 1, 45, 'La cantidad');

		if(count($this->valida->getErroresValidacion()) == 0 ){
		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearInventario($nombre,$precioUnitario,$descripcion,$cantidad,$PROVEEDOR_rfc);
		    	}
		    	catch(Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
		}else{
					    	$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",null,$this->valida->getErroresValidacion());
					    	
					    }
			}
			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}
		}

		/*public function mostrar_proveedores(){
			$proveedores=$this->model->listarInventarios();
		}*/


	}