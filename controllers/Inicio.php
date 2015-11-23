<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;

	class Inicio extends Controller{

		public function __construct(){
			parent::__construct();
			$this->loadModel();
			
		}
		public function login(){
			try{

			$this->view->render(explode("\\",get_class($this))[1], "login",$this->getErrores());
			}
			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}
		}

		public function inicio(){
try{
	
			$this->view->render(explode("\\",get_class($this))[1], "inicio",$this->getErrores());
}
catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}

		}


	}