<?php
	namespace models;

	use libs\DBConexion;

	class PedidoModel{
		public $formaPago;
		public $fecha;
		public $estado;
		public $direccionEnvio;
		public $CLIENTE_dni;

		public $PEDIDO_idPedido;
		public $PRODUCTO_codigo;
		public $cantProducto;
		public $costoTotal=0;


		public function listarInventarios(){
			try{
			$con = DBConexion::getInstance();
			if (is_null($con)) {
				throw new Exception("Error en la conexion a la base de datos, verifique",1);
			}

			$clientes = $con->executeQuery('SELECT * FROM cliente;',null, __NAMESPACE__.'\PedidoModel');

			return $clientes;
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

			$productos = $con->executeQuery('SELECT * FROM producto;',null, __NAMESPACE__.'\PedidoModel');

			return $productos;
		}
		catch (Exception $e) {
			throw $e;	
		}
		}

		public function registrarPedido($formaPago,$fecha,$estado,$direccionEnvio,$CLIENTE_dni,$PRODUCTO_codigo,$cantProducto){
			try{
			$this->formaPago = $formaPago;
			$this->fecha = $fecha;
			$this->estado = $estado;
			$this->direccionEnvio = $direccionEnvio;
			$this->CLIENTE_dni = $CLIENTE_dni;

			$this->PRODUCTO_codigo = $PRODUCTO_codigo;
			$this->cantProducto = $cantProducto;

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
					$this->formaPago,
					$this->fecha,
					$this->estado,
					$this->direccionEnvio,
					$this->CLIENTE_dni
				);

			$sql = vsprintf("INSERT INTO pedido(formaPago,fecha,estado,direccionEnvio,CLIENTE_dni) VALUES('%s', '%s', '%s','%s',%s);", $params);
			echo $sql;
			$con->executeUpdate(array($sql));
			echo "PASOOOTOOODO!";

			$sql1= "SELECT max(idPedido) as idPedido FROM pedido;";
			$id_Pedido = $con->executeQuery($sql1);
			//print_r($id_Pedido[0]->idPedido);
			$this->PEDIDO_idPedido = $id_Pedido[0]->idPedido;
			//$CLIENTE_dni = $DNI[0]->dni;
			echo $this->PEDIDO_idPedido;
			//return $idPedido;
			$this->registarProductohaspedido();
		}
		catch (Exception $e) {
			throw $e;	
		}
		}

		public function registarProductohaspedido(){
			try{
			$con = DBConexion::getInstance();
			//echo "jeje lol";			
			$sql="SELECT precioUnitario FROM producto where codigo = $this->PRODUCTO_codigo;";
			$sql1= $con->executeQuery($sql);
			//print_r($precioUni);
			$precioUni = $sql1[0]->precioUnitario;
			$this->costoTotal = $this->cantProducto*$precioUni;

			$params1 = array(
					$this->PRODUCTO_codigo,
					$this->PEDIDO_idPedido,
					$this->costoTotal,
					$this->cantProducto
				);

			$sql2 = vsprintf("INSERT INTO producto_has_pedido(PRODUCTO_codigo,PEDIDO_idPedido,costoTotal,cantProducto) VALUES(%s, %s, %s,%s);", $params1);
			$con->executeUpdate(array($sql2));
			echo "LISTOOOOOOO";
		}
		catch (Exception $e) {
			throw $e;	
		}


			//echo $precioUni;
			//echo "lolololol";			
		}

		public function listarPedidos(){
			try {
				$con = DBConexion::getInstance();
				if (is_null($con)) {
					throw new Exception("Error en la conexion a la base de datos, verifique",1);
				}
				$pedidos = $con->executeQuery('SELECT * FROM pedido;',null, __NAMESPACE__.'\PedidoModel');
				return $pedidos;
			} catch (Exception $e) {
				throw $e;
			}
		}

		public function listarProductosPedidos(){
			try {
				$con = DBConexion::getInstance();
				if (is_null($con)) {
					throw new Exception("Error en la conexion a la base de datos, verifique",1);
				}
				$productoPedido = $con->executeQuery('SELECT * FROM producto_has_pedido;',null, __NAMESPACE__.'\PedidoModel');
				return $productoPedido;
			} catch (Exception $e) {
				throw $e;
			}
		}

		public function listarPedidos1(){
			try {
				$con = DBConexion::getInstance();
				if (is_null($con)) {
					throw new Exception("Error en la conexion a la base de datos, verifique",1);
				}
				$pedidos = $con->executeQuery('SELECT * FROM pedido;',null, __NAMESPACE__.'\PedidoModel');
				return $pedidos;
			} catch (Exception $e) {
				throw $e;
			}
		}

		public function getPedidoById($id){
			try {
				$con = DBConexion::getInstance();
				if (is_null($con)) {
					throw new Exception("Error en la conexion a la base de datos, verifique",1);
				}

				$pedido = $con->executeQuery("SELECT * FROM pedido WHERE idPedido = ?;",array($id), __NAMESPACE__.'\PedidoModel');

				return $pedido;
			} catch (Exception $e) {
				
			}
		}
		
	}