<?php
	namespace models;

	use libs\DBConexion;

	class ProductoModel{

		public $nombre;
		public $precioUnitario;
		public $descripcion;
		public $cantidad;
		public $PROVEEDOR_rfc;

		public function listarInventarios(){
			$con = DBConexion::getInstance();
			if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
			}

			$proveedores = $con->executeQuery('SELECT * FROM proveedor;',null, __NAMESPACE__.'\ProductoModel');

			return $proveedores;
		}

		public function crearInventario($nombre,$precioUnitario,$descripcion,$cantidad,$PROVEEDOR_rfc){
			$this->nombre = $nombre;
			$this->precioUnitario = $precioUnitario;
			$this->descripcion = $descripcion;
			$this->cantidad = $cantidad;
			$this->PROVEEDOR_rfc = $PROVEEDOR_rfc;

			echo "jiji";
			$this->guardar();
		}

		public function guardar(){
			$con = DBConexion::getInstance();
			$params = array(
					$this->nombre,
					$this->precioUnitario,
					$this->descripcion,
					$this->cantidad,
					$this->PROVEEDOR_rfc
				);

			$sql = vsprintf("INSERT INTO producto(nombre,precioUnitario,descripcion,cantidad,PROVEEDOR_rfc) VALUES('%s', %s, '%s',%s,%s);", $params);
			echo $sql;
			$con->executeUpdate(array($sql));

			echo "PASOO TODOO!";

		}
	}
