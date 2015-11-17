<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;

	class Pedido extends Controller{

		public function __construct(){
			parent::__construct();
			$this->loadModel();
			
		}

		public function pedido_inicio(){

			$this->view->render(explode("\\",get_class($this))[1], "pedido_inicio",$this->getErrores());

		}

		public function guardar_pedido(){				
			$clientes=$this->model->listarInventarios();
			$productos=$this->model->listarProductos();
			echo "lol";
			//print_r($clientes);
			//$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			
			//$this->guardar($params);
			if(isset($params['dni']) && isset($params['formaPago']) && isset($params['fecha']) && isset($params['estado']) && isset($params['direccionEnvio']) && isset($params['PRODUCTO_codigo']) && isset($params['cantProducto']) ) {
				//$this->guardarProducto($params);
				echo "lol";
				print_r($params);
				//$this->guardarProducto($params);
				//$proveedores=$this->model->listarInventarios();
				//$this->crearProveedor($params);
				
			}
			$this->view->render2(explode("\\",get_class($this))[1], "guardar_pedido",$clientes,$productos,$this->getErrores());			
		}
	}	