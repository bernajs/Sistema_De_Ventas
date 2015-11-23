<?php
	namespace models;

	use libs\DBConexion;

	class ProductoModel{

		public $codigo;
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

			//echo "jiji";
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

			$sql = vsprintf("INSERT INTO producto(nombre,precioUnitario,descripcion,cantidad,PROVEEDOR_rfc) VALUES('%s', %s, '%s',%s,'%s');", $params);
			//echo $sql;
			$con->executeUpdate(array($sql));

			//echo "PASOO TODOO!";
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

		public function actualizarProducto($codigo,$nombre,$precioUnitario,$descripcion,$cantidad,$PROVEEDOR_rfc){
			try {
				$this->codigo = $codigo;
				$this->nombre = $nombre;
				$this->precioUnitario = $precioUnitario;
				$this->descripcion = $descripcion;
				$this->cantidad = $cantidad;
				$this->PROVEEDOR_rfc = $PROVEEDOR_rfc;

				$this->update();
			} catch (Exception $e) {
				throw $e;
			}
		}

		public function update(){
			try {
				$con = DBConexion::getInstance();

				$params = array(
					$this->nombre,
					$this->precioUnitario,
					$this->descripcion,
					$this->cantidad,
					$this->PROVEEDOR_rfc
				);

				$sql = vsprintf("UPDATE producto SET nombre='%s',precioUnitario=%s,descripcion='%s',cantidad=%s,PROVEEDOR_rfc='%s' WHERE codigo=$this->codigo;", $params);
				$con->executeUpdate(array($sql));
			} catch (Exception $e) {
				throw $e;
			}
		}

		public function eliminarProducto($id){
			try {
				//$dni = $id;
				//echo "<script language='javascript'>";
				//echo "alert('$id')";
				//echo "</script>";
				//echo "<script language='javascript'>";
				//echo "alert('HOLAA')";
				//echo "</script>";
				$con = DBConexion::getInstance();

				if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
				}

				//$cliente = $con->executeQuery("DELETE FROM cliente WHERE dni = ?;",array($id), __NAMESPACE__.'\ClienteModel');
				//$sql="DELETE FROM cliente where dni = $id;";
				$sql1 = vsprintf("DELETE FROM producto WHERE codigo = %s", $id);
				//echo $sql;
				$con->executeUpdate(array($sql1));
				//echo "<script language='javascript'>";
				//			echo "alert('$sql1')";
				//echo "</script>";
				//$con->executeQuery($sql);
				//echo "<script language='javascript'>";
				//echo "alert('PASOO')";
				//echo "</script>";
				
			} catch (Exception $e) {
				throw $e;
			}
			
		//$sql1="DELETE FROM direccion_cliente where CLIENTE_dni = $dni;";
		//echo $sql1;
		//$con->executeQuery($sql1);
		}



	}
