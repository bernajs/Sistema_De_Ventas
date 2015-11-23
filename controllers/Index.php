<?php
	
	namespace controllers;
	use libs\Controller;
	use libs\View;
	
	class Index extends Controller{

		public function __construct(){
			parent::__construct();
			$this->loadModel();
		}
		

		function index(){
			try{
			echo 'Index/index';
			echo "Hola";
			$a = explode("\\", get_class($this))[1];
			echo $a;
			$this->errores[0] = "Pepito no vino a la escuela";
			$this->view->render($a,"index",$this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function showLogin(){
			try{
			$a = explode("\\",get_class($this))[1];
			$this->errores[0] = "Pepito no vino a la escuela";
			$this->view->render($a, "showLogin", null, $this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}
	}