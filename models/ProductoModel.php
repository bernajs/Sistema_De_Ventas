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
			try{
			$con = DBConexion::getInstance();
			if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
			}

			$proveedores = $con->executeQuery('SELECT * FROM proveedor;',null, __NAMESPACE__.'\ProductoModel');

			return $proveedores;
		}
		catch (Exception $e) {
			throw $e;	
		}
		}

		public function crearInventario($nombre,$precioUnitario,$descripcion,$cantidad,$PROVEEDOR_rfc){
			try{
			$this->nombre = $nombre;
			$this->precioUnitario = $precioUnitario;
			$this->descripcion = $descripcion;
			$this->cantidad = $cantidad;
			$this->PROVEEDOR_rfc = $PROVEEDOR_rfc;

			echo "jiji";
			$this->guardar();
		}
		catch (Exception $e) {
			throw $e;	
		}
		}

		public function guardar(){
			try{
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
		catch (Exception $e) {
			throw $e;	
		}

		}

		public function listarProductos(){
			try{
			$con = DBConexion::getInstance();
			if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
			}

			$productos = $con->executeQuery('SELECT * FROM producto;',null, __NAMESPACE__.'\ProductoModel');

			return $productos;
		}
		catch (Exception $e) {
			throw $e;	
		}
		}

		public function getProductoById($id){
			try{
			$con = DBConexion::getInstance();
			if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
			}

			$producto = $con->executeQuery("SELECT * FROM producto WHERE codigo = ?;",array($id), __NAMESPACE__.'\ProductoModel');

			return $producto;
		}
		catch (Exception $e) {
			throw $e;	
		}
		}
	}
