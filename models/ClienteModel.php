<?php
namespace models;

use libs\DBConexion;

class ClienteModel {
	//public $dni;
	public $nombre;
	public $aPaterno;
	public $aMaterno;
	public $fechaNacimiento;
	public $ciudad;
	public $cp;
	public $colonia;
	public $calle;
	public $numero;
	public $detalle;	
	//public $DIRECCION_idDireccion;

	/*public function __construct(){
		$this->costo_faltante = 0.0;
	}*/

	/*public function obtenerInventarioDia($dia){
		//Solicito el unico objeto de conexion que usaran todas la clases, usando el patron Singleton		
		$con = DBConexion::getInstance();

		$inventarios= $con->executeQuery('SELECT * FROM inventario WHERE inventario.dia=?;',
			array($dia), __NAMESPACE__.'\InventarioModel');

		return $inventarios;
	}*/

	/*public function listarDirecciones(){
		$con = DBConexion::getInstance();

		$direcciones = $con->executeQuery('SELECT * FROM direccion_cliente;',null,'ClienteModel');
		return $direcciones;

	}*/

	public function crearInventario($nombre, $aPaterno, $aMaterno, $fechaNacimiento,$ciudad,$cp,$colonia,$calle,$numero,$detalle/*, $DIRECCION_idDireccion*/){
		//Dia de trabajo en el ingenio.
		$this->nombre=$nombre;
		//Produccion y demanda del dia
		$this->aPaterno = $aPaterno;
		$this->aMaterno = $aMaterno;
		$this->fechaNacimiento = $fechaNacimiento;
		$this->ciudad = $ciudad;
		$this->cp = $cp;
		$this->colonia = $colonia;
		$this->calle = $calle;
		$this->numero = $numero;
		$this->detalle = $detalle;
		//$this->DIRECCION_idDireccion = $DIRECCION_idDireccion;

		

		//Inventario inicial
		/*if($this->dia == 1){
			$this->inventario_inicial = $this->produccion;
		}
		else{
			//Obteniendo el inventario del dia anterior
			
			$consulta =$this->obtenerInventarioDia($this->dia - 1);
			if(count($consulta)==0){
				throw new \Exception(sprintf("No existe un inventario para el dia %s, por tanto, no se puede seguir", $dia-1));
				
			}
			$this->inventario_inicial = $consulta[0]->inventario_final + $this->produccion;


		}*/
		//Inventario final del dia
		/*$this->inventario_final = max(0, $this->inventario_inicial - $this->ventas);

		//Calculando las ventas del dia
		$this->ventas = min($this->inventario_inicial, $this->demanda);

		//Costo produccion
		$this->costo_produccion = 5 * $this->produccion;

		//Costo faltante
		if($this->demanda > $this->inventario_inicial){
			$this->costo_faltante = 6 * ($this->demanda - $this->inventario_inicial);
		}

		//Costo inventario
		$this->costo_inventario = 2 * (($this->inventario_inicial + $this->inventario_final) / 2);

		//Costo total
		$this->costo_total = $this->costo_produccion + $this->costo_faltante + $this->costo_inventario;

		
		//Guardando el inventario del dia*/
		echo "holaaa";
		$this->guardar();
	}

	public function guardar(){
		//Solicito un objeto conexion, usando el patron Singleton
		$con = DBConexion::getInstance();
		$params = array(			
			$this->nombre,
			$this->aPaterno,
			$this->aMaterno,
			$this->fechaNacimiento
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
		$sql1 = vsprintf("INSERT INTO cliente(nombre,aPaterno,aMaterno,fechaNacimiento) VALUES('%s', '%s', '%s','%s');", $params);
		echo $sql1;
		$con->executeUpdate(array($sql1));
		//$sql2 = vsprintf("SELECT max(dni) as dni FROM cliente;");

		//echo $sql2;

		//$CLIENTE_dni = $con->executeUpdate(array($sql2));
		echo "HASTA AQUI BIEN";
		//$CLIENTE_dni = $con->executeQuery('SELECT max(dni) as dni FROM cliente;',null, __NAMESPACE__.'\ClienteModel');
		$sql= "SELECT max(dni) as dni FROM cliente;";
		$DNI = $con->executeQuery($sql);
		print_r($DNI[0]->dni);
		$CLIENTE_dni = $DNI[0]->dni;
		//return $CLIENTE_dni;

		echo "PASO ESTO";

		$params1 = array(
			$this->ciudad,
			$this->cp,
			$this->colonia,
			$this->calle,
			$this->numero,
			$this->detalle,
			$CLIENTE_dni
			);
		print_r($params1);
		$sql3 = vsprintf("INSERT INTO direccion_cliente(ciudad,cp,colonia,calle,numero,detalle,CLIENTE_dni) VALUES('%s', %s, '%s', '%s', %s, '%s', %s);", $params1);
		$con->executeUpdate(array($sql3));
		echo $sql3;
		echo "PASOOO TODO";
		

	}

	/*public function listarInventarios(){
		$con = DBConexion::getInstance();
		if (is_null($con)) {
			throw new Exception("Error en la conexion a la base de datos, verifique",1);
		}

		$inventarios = $con->executeQuery('SELECT * FROM inventario;',null, __NAMESPACE__.'\InventarioModel');

		return $inventarios;
	}*/


}

?>