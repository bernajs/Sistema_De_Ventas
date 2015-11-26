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

		public function guardar_usuario($params=array()){
			try{				
				if(isset($params['usuario']) && isset($params['contrasenya']) && isset($params['nombre']) && isset($params['apellidos'])) {
					//$this->guardarProducto($params);
					//echo "lol";
					//print_r($params);					
					$this->guardarUsuario($params);
					echo "<script language='javascript'>";
					echo "alert('Usuario guardado correctamente')";
					echo "</script>";
					//$proveedores=$this->model->listarInventarios();
					//$this->crearProveedor($params);				
				}
				$this->view->render(explode("\\",get_class($this))[1], "guardar_usuario",$this->getErrores());
			}
			catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function guardarUsuario($params){
			try {
				//echo "<script language='javascript'>";
				//echo "alert('HOLAA')";
				//echo "</script>";
				$usuario = $params['usuario'];
				$contrasenya = $params['contrasenya'];
				$nombre = $params['nombre'];
				$apellidos = $params['apellidos'];

				if (count($this->errores)==0) {
					try {
						$this->model->crearUsuario($usuario,$contrasenya,$nombre,$apellidos);
					} catch (Exception $e) {
						$this->errores['global']=$e->getMessage();
					}
				}
				
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function mostrar_usuarios(){
			try {
				$usuarios=$this->model->listarUsuarios();
				$this->view->render(explode("\\",get_class($this))[1], "mostrar_usuarios", $usuarios,$this->getErrores());
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function modificar_usuario($params=array()){
			try {
				if (count($params)>0) {
					$u = $this->model->getUsuarioById($params['identificador']);
					if (empty($u)) {
						View::renderErrors(array("No existe el usuario con identificador ".$params['identificador']));
					}else{
						$this->view->render2(explode("\\",get_class($this))[1], "modificar_usuario", $u[0], $params, $this->getErrores());
					}

				}else{
					View::renderErrors(array("No se envio el identificador del producto"));	
				}
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function actualizar_usuario($params=array()){
			try {
				if(isset($params['idUsuario']) && isset($params['usuario']) && isset($params['contrasenya']) && isset($params['nombre']) && isset($params['apellidos']) && isset($params['activo'])) {
					//$this->guardarProducto($params);
					//echo "lol";
					//print_r($params);					
					$this->updateUsuario($params);
					echo "<script language='javascript'>";
					echo "alert('Usuario actualizado correctamente')";
					echo "</script>";
					$this->usuario_inicio();
					//$proveedores=$this->model->listarInventarios();
					//$this->crearProveedor($params);				
				}
			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function updateUsuario($params){
			try {
				$idUsuario = $params['idUsuario'];
				$usuario = $params['usuario'];
				$contrasenya = $params['contrasenya'];
				$nombre = $params['nombre'];
				$apellidos = $params['apellidos'];
				$activo = $params['activo'];

				if (count($this->errores)==0) {
					try {
						$this->model->actualizarUsuario($idUsuario,$usuario,$contrasenya,$nombre,$apellidos,$activo);
					} catch (Exception $e) {
						$this->errores['global']=$e->getMessage();
					}
				}
			} catch (Exception $e) {
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