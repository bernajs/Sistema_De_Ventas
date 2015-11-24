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
				echo "<script language='javascript'>";
				echo "alert('HOLAA')";
				echo "</script>";
				$this->dt = new DateTime();				
				$this->ultima_entrada = $this->dt->format('Y-m-d H:i:s');
				$this->dtt = new DateTime();
				$this->fecha_creacion = $this->dtt->format('Y-m-d H:i:s');
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
	}