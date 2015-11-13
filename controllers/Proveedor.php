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

		public function guardar_proveedor(){
			$this->view->render(explode("\\",get_class($this))[1], "guardar_proveedor",$this->getErrores());			
		}
	}