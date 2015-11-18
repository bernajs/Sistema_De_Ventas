<?php
	namespace models;

	use libs\DBConexion;

	class PedidoModel{
		public $formaPago;
		public $fecha;
		public $estado;
		public $direccionEnvio;
		public $CLIENTE_dni;

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

		public function registrarPedido($formaPago,$fecha,$estado,$direccionEnvio,$CLIENTE_dni){
			$this->formaPago = $formaPago;
			$this->fecha = $fecha;
			$this->estado = $estado;
			$this->direccionEnvio = $direccionEnvio;
			$this->CLIENTE_dni = $CLIENTE_dni;

			$this->guardar();
		}

		public function guardar(){
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

		}
		
	}