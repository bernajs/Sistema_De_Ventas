<?php
	namespace controllers;	
	use libs\Controller;
	use libs\Validation;
	use libs\View;

	class Inventario extends Controller {
		private $valida;

		public function __construct(){
			parent::__construct();
			$this->valida = new Validation();
			$this->loadModel();
			
		}

		public function listarInventario(){
			$inventarios = $this->model->listarInventarios();
			$this->view->render(explode("\\",get_class($this))[1], "listar", $inventarios, $this->getErrores());

		}


		public function crear($params=array()){
			//Llamando al metodo del modelo
			if(isset($params['dia']) && isset($params['demanda']) && isset($params['produccion'])){
				try{
					$this->crearInventario($params);
					//Renderizando la vista asociada
					$this->view->render(explode("\\",get_class($this))[1], "crear",null,$this->getErrores());

				}
				catch(\Exception $e){

					View::renderErrors(array($e->getMessage()));
		
		    
				}
				
			}
			else{
				$this->view->render(explode("\\",get_class($this))[1], "crear",null,$this->getErrores());	
			}
			

			
		}

		public function crearInventario($params){
			
		    $dia = $params['dia'];
		    $produccion = $params['produccion'];
		    $demanda = $params['demanda'];

		   
		    $this->valida->validaNumeros($dia, 1, 9000, 'El dia no esta en los limites correctos o no es un numero');
		    $this->valida->validaNumeros($produccion, 1, 9000, 'La demanda no esta en los limites correctos o no es un numero');
		    $this->valida->validaNumeros($demanda, 1, 9000, 'La produccion no esta en los limites correctos o no es un numero');

		    if(count($this->valida->getErroresValidacion()) == 0 ){
		    	
	        	$this->model->crearInventario($dia, $produccion, $demanda);
		    	
		    }else{
		    	$this->view->render(explode("\\",get_class($this))[1], "crear",null,$this->valida->getErroresValidacion());
		    	
		    }
		    
		}	    
	}

?>