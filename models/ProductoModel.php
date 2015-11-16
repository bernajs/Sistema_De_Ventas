<?php
	namespace models;

	use libs\DBConexion;

	class ProductoModel{

		public function listarInventarios(){
			$con = DBConexion::getInstance();
			if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
			}

			$proveedores = $con->executeQuery('SELECT * FROM proveedor;',null, __NAMESPACE__.'\ProductoModel');

			return $proveedores;
		}
	}
