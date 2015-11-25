<?php
	namespace models;

	use libs\DBConexion;

	class UsuarioModel{
		public $usuario;
		public $contrasenya;
		public $nombre;
		public $apellidos;
		public $ultima_entrada;
		public $fecha_creacion;
		public $activo=1;
		public $dt;
		public $dtt;

		
				

		public function crearUsuario($usuario,$contrasenya,$nombre,$apellidos){
			try {
				$this->usuario = $usuario;
				$this->contrasenya = $contrasenya;
				$this->nombre = $nombre;
				$this->apellidos = $apellidos;				

				$this->guardar();
			} catch (Exception $e) {
				throw $e;
			}
		}

		public function guardar(){
			try {
				//echo "<script language='javascript'>";
				//echo "alert('HOLAA')";
				//echo "</script>";
				//$this->dt = new DateTime();				
				//$this->ultima_entrada = $this->dt->format('Y-m-d H:i:s');
				//$this->dtt = new DateTime();
				//$this->fecha_creacion = $this->dtt->format('Y-m-d H:i:s');
				$a = date("Y-m-d H:i:s");
				//$b = date("h:i:sa");
				$this->ultima_entrada = $a;
				$this->fecha_creacion = $a;
				//var_dump($a);
				$con = DBConexion::getInstance();
				$params = array(
					$this->usuario,
					$this->contrasenya,
					$this->nombre,
					$this->apellidos,
					$this->ultima_entrada,
					$this->fecha_creacion,
					$this->activo
				);

				$sql = vsprintf("INSERT INTO usuario(usuario,contrasenya,nombre,apellidos,ultima_entrada,fecha_creacion,activo) VALUES('%s', '%s', '%s','%s','%s','%s',%s);", $params);
				$con->executeUpdate(array($sql));
			} catch (Exception $e) {
				throw $e;
			}
		}

		public function listarUsuarios(){
			try {
				$con = DBConexion::getInstance();
				if (is_null($con)) {
					throw new Exception("Error en la conexion a la base de datos, verifique",1);				
				}
				$clientes = $con->executeQuery('SELECT * FROM usuario',null, __NAMESPACE__.'\UsuarioModel');				
				return $clientes;
			} catch (Exception $e) {
				throw $e;
			}
		}

		public function getUsuarioById($id){
			try {
				$con = DBConexion::getInstance();
				if (is_null($con)) {
					throw new Exception("Error en la conexion a la base de datos, verifique",1);
				}
				$usuario = $con->executeQuery("SELECT * FROM usuario WHERE idUsuario = ?;",array($id),__NAMESPACE__.'\UsuarioModel');
				return $usuario;
			} catch (Exception $e) {
				throw $e;
			}
		}



	}