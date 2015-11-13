<?php
	
	namespace controllers;
	use libs\Controller;
	
	class Index extends Controller{
		function __construct(){
			parent::__construct();
		}

		function index(){
			echo 'Index/index';
			echo "Hola";
			$a = explode("\\", get_class($this))[1];
			echo $a;
			$this->errores[0] = "Pepito no vino a la escuela";
			$this->view->render($a,"index",$this->getErrores());


		}
	}