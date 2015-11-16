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

		public function guardar_producto(){
			$proveedores=$this->model->listarInventarios();
			$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			
			//$this->guardar($params=array());

		}

		/*public function guardar(){
			if(isset($params['rfc']) && isset($params['nombre']) && isset($params['telefono']) && isset($params['representanteLegal']) && isset($params['fax']) && isset($params['correoElectronico']) && isset($params['webProveedor']) && isset($params['observaciones']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])){
				$this->guardarDireccion($params1);

				print_r($params);
				$this->crearProveedor($params);
				
			}
		}*/

		/*public function mostrar_proveedores(){
			$proveedores=$this->model->listarInventarios();
		}*/


	}