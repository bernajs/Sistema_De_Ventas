<?php
	namespace models;

	use libs\DBConexion;

	class PedidoModel{
		public function listarInventarios(){
			$con = DBConexion::getInstance();
			if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
			}

			$clientes = $con->executeQuery('SELECT * FROM cliente;',null, __NAMESPACE__.'\PedidoModel');

			return $clientes;
		}

		public function listarProductos(){
			$con = DBConexion::getInstance();
			if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
			}

			$productos = $con->executeQuery('SELECT * FROM producto;',null, __NAMESPACE__.'\PedidoModel');

			return $productos;
		}
		
	}