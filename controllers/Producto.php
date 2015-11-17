<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;

	class Producto extends Controller{

		public function __construct(){
			parent::__construct();
			$this->loadModel();

			
		}

		public function producto_inicio(){

			$this->view->render(explode("\\",get_class($this))[1], "producto_inicio",$this->getErrores());

		}

		public function guardar_producto($params=array()){
			$proveedores=$this->model->listarInventarios();
			//$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			
			//$this->guardar($params);
			if(isset($params['nombre']) && isset($params['precioUnitario']) && isset($params['descripcion']) && isset($params['cantidad']) && isset($params['PROVEEDOR_rfc'])) {
				//$this->guardarProducto($params);
				echo "lol";
				print_r($params);
				$this->guardarProducto($params);
				//$proveedores=$this->model->listarInventarios();
				//$this->crearProveedor($params);
				
			}
			$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			


		}

		public function guardarProducto($params){
			$nombre = $params['nombre'];
		    $precioUnitario = $params['precioUnitario'];
		    $descripcion = $params['descripcion'];
		    $cantidad = $params['cantidad'];
		    $PROVEEDOR_rfc = $params['PROVEEDOR_rfc'];

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearInventario($nombre,$precioUnitario,$descripcion,$cantidad,$PROVEEDOR_rfc);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
			
		}

		/*public function mostrar_proveedores(){
			$proveedores=$this->model->listarInventarios();
		}*/


	}