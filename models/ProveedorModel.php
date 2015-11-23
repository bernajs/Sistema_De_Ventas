<?php
	namespace models;

	use libs\DBConexion;

	class ProveedorModel {
		public $rfc;
		public $nombre;
		public $telefono;
		public $representanteLegal;
		public $fax;
		public $correoElectronico;
		public $webProveedor;
		public $observaciones;
		public $ciudad;
		public $cp;
		public $colonia;
		public $calle;
		public $numero;
		public $detalle;
		public $PROVEEDOR_rfc;

		public function crearProveedor($rfc,$nombre,$telefono,$representanteLegal,$fax,$correoElectronico,$webProveedor,$observaciones,$ciudad,$cp,$colonia,$calle,$numero,$detalle){
			try{
			//Dia de trabajo en el ingenio.
			$this->rfc=$rfc;
			//Produccion y demanda del dia
			$this->nombre = $nombre;
			$this->telefono = $telefono;
			$this->representanteLegal = $representanteLegal;
			$this->fax = $fax;
			$this->correoElectronico = $correoElectronico;
			$this->webProveedor = $webProveedor;
			$this->observaciones = $observaciones;
			$this->ciudad = $ciudad;
			$this->cp = $cp;
			$this->colonia = $colonia;
			$this->calle = $calle;
			$this->numero = $numero;
			$this->detalle = $detalle;
			$this->PROVEEDOR_rfc = $rfc;
			//$this->DIRECCION_idDireccion = $DIRECCION_idDireccion;

							
			//Guardando el proveedor*/
			echo "holaaa";
			$this->guardar();
		}
		catch (Exception $e) {
			throw $e;	
		}
		}

		public function guardar(){
			try{
		//Solicito un objeto conexion, usando el patron Singleton
		$con = DBConexion::getInstance();
		$params = array(			
			$this->rfc,
			$this->nombre,
			$this->telefono,
			$this->representanteLegal,
			$this->fax,
			$this->correoElectronico,
			$this->webProveedor,
			$this->observaciones
			//$this->DIRECCION_idDireccion
			);
		/*$params1 = array(
			$this->ciudad,
			$this->cp,
			$this->colonia,
			$this->calle,
			$this->numero,
			$this->detalle
			//ciudad,$cp,$colonia,$calle,$numero,$detall
			);*/
		//print_r($params1);
echo "holsfdasd";
		$sql1 = vsprintf("INSERT INTO proveedor(rfc,nombre,telefono,representanteLegal,fax,correoElectronico,webProveedor,observaciones) VALUES('%s', '%s', '%s', '%s', '%s','%s','%s','%s');", $params);
		echo $sql1;
		$con->executeUpdate(array($sql1));
		//$sql2 = vsprintf("SELECT max(dni) as dni FROM cliente;");

		//echo $sql2;

		//$CLIENTE_dni = $con->executeUpdate(array($sql2));
		echo "HASTA AQUI BIEN";
		//$CLIENTE_dni = $con->executeQuery('SELECT max(dni) as dni FROM cliente;',null, __NAMESPACE__.'\ClienteModel');
		//$sql= "SELECT max(dni) as dni FROM cliente;";
		//$DNI = $con->executeQuery($sql);
		//print_r($DNI[0]->dni);
		//$CLIENTE_dni = $DNI[0]->dni;
		//return $CLIENTE_dni;

		//echo "PASO ESTO";


		$params1 = array(
			$this->ciudad,
			$this->cp,
			$this->colonia,
			$this->calle,
			$this->numero,
			$this->detalle,
			$this->PROVEEDOR_rfc
			);
		print_r($params1);
		$sql3 = vsprintf("INSERT INTO direccion_proveedor(ciudad,cp,colonia,calle,numero,detalle,PROVEEDOR_rfc) VALUES('%s', %s, '%s', '%s', %s, '%s', '%s');", $params1);
		echo $sql3;
		$con->executeUpdate(array($sql3));
		echo $sql3;
		echo "PASOOO TODO";
	}
	catch (Exception $e) {
		throw $e;	
	}
	}

	public function listarInventarios(){
		try{
		$con = DBConexion::getInstance();
		if (is_null($con)) {
			throw new Exception("Error en la conexion a la base de datos, verifique",1);
		}

		$proveedores = $con->executeQuery('SELECT * FROM proveedor;',null, __NAMESPACE__.'\ProveedorModel');

		return $proveedores;
	}
	catch (Exception $e) {
		throw $e;	
	}
	}

	public function getProveedorById($id){
		try{
		$con = DBConexion::getInstance();
		if (is_null($con)) {
			throw new Exception("Error en la conexion a la base de datos, verifique",1);
		}

		$proveedor = $con->executeQuery("SELECT * FROM proveedor WHERE rfc = ?;",array($id), __NAMESPACE__.'\ProveedorModel');

		return $proveedor;
	}
	catch (Exception $e) {
		throw $e;	
	}
	}

		
	public function getProveedorDireccionById($id){
		try{
		$con = DBConexion::getInstance();
		if (is_null($con)) {
			throw new Exception("Error en la conexion a la base de datos, verifique",1);
		}

		$dir = $con->executeQuery("SELECT * FROM direccion_proveedor WHERE PROVEEDOR_rfc = ?;",array($id), __NAMESPACE__.'\ProveedorModel');
		//var_dump($dir);
		return $dir;
	}
	catch (Exception $e) {
		throw $e;	
	}
	}

	}