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
			$this->view->render(explode("\\",get_class($this))[1], "guardar_pedido",$this->getErrores());			
		}


	}