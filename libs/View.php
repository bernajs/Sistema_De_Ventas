<?php
namespace libs;

class View{

	private $errores;
	private static $global_errors;
	private $datos;
	private $datos1;

	
	public function render($controler, $view, $data=null, $errors=array()){
		$this->errores = $errors;
		$this->datos = $data;

		$view = "views".DS.$controler.DS.$view.".php";
		if(file_exists($view)){
			require_once($view);
		}
		else{
			throw new \Exception("No existe una vista asociada a esta petición: $view no existe", 1);
			
		}
	}

	public function render2($controler, $view, $data=null,$data1=null, $errors=array()){
		$this->errores = $errors;
		$this->datos = $data;
		$this->datos1 = $data1;

		$view = "views".DS.$controler.DS.$view.".php";
		if(file_exists($view)){
			require_once($view);
		}
		else{
			throw new \Exception("No existe una vista asociada a esta petición: $view no existe", 1);
			
		}
	}

	public function render3($controler, $view, $data=null,$data1=null,$data2=null, $errors=array()){
		$this->errores = $errors;
		$this->datos = $data;
		$this->datos1 = $data1;
		$this->datos2 = $data2;

		$view = "views".DS.$controler.DS.$view.".php";
		if(file_exists($view)){
			require_once($view);
		}
		else{
			throw new \Exception("No existe una vista asociada a esta petición: $view no existe", 1);
			
		}
	}

	public function getErrores(){
		return $this->errores;
	}

	public function getDatos(){
		return $this->datos;
	}
	public function getDatos1(){
		return $this->datos1;
	}
	public function getDatos2(){
		return $this->datos2;
	}

	public static function renderErrors($errors){
		self::$global_errors = $errors;
		$view = "views".DS."errorPage.php";
		
		
		if(file_exists($view)){
			require_once($view);
		}
		else{
			throw new \Exception("No existe una vista de error", 1);
			
		}
	}

	public static function getGlobalErrors(){
		return self::$global_errors;
	}
}
?>