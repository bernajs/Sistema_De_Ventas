<?php
	namespace controllers;	
	use libs\Controller;

	class Inicio extends Controller{

		public function __construct(){
			parent::__construct();
			
		}
		public function login(){
			$this->view->render(explode("\\",get_class($this))[1], "login",$this->getErrores());
		}

		public function inicio(){

			$this->view->render(explode("\\",get_class($this))[1], "inicio",$this->getErrores());

		}


	}