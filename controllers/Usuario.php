<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;

	class Usuario extends Controller{

		public function __construct(){
			try{
			parent::__construct();
			$this->loadModel();			
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function usuario_inicio(){
			try{
			$this->view->render(explode("\\",get_class($this))[1], "usuario_inicio",$this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}		
		public function guardar(){
			try{
			//$this->view->render(explode("\\",get_class($this))[1], "usuario_inicio",$this->getErrores());
			$this->view->render(explode("\\",get_class($this))[1], "guardar_usuario",$this->getErrores());
			}
			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}

		}

		public function guardar_usuario(){
			try{
			$this->view->render(explode("\\",get_class($this))[1], "guardar_usuario",$this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function index(){
			try{
			$this->view->render(explode("\\",get_class($this))[1], "index",$this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}


	}