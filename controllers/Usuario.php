<?php
	namespace controllers;	
	use libs\Controller;

	class Usuario extends Controller{

		public function __construct(){
			parent::__construct();
			
		}

		public function usuario_inicio(){

			$this->view->render(explode("\\",get_class($this))[1], "usuario_inicio",$this->getErrores());

		}

		public function guardar_usuario(){
			$this->view->render(explode("\\",get_class($this))[1], "guardar_usuario",$this->getErrores());
		}

		public function index(){
			$this->view->render(explode("\\",get_class($this))[1], "index",$this->getErrores());
		}


	}