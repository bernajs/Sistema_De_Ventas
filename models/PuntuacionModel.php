<?php
namespace models;
use libs\DBConexion;
class PuntuacionModel {
	//public $dni;
	public $_id;
	public $puntos;
	public $nombre;
	public $fecha;
	/*public $ciudad;
	public $cp;
	public $colonia;
	public $calle;
	public $numero;
	public $detalle;
	public $dni;
	public $CLIENTE_dni;*/
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
	/*public function actualizarCliente($dni,$nombre, $aPaterno, $aMaterno, $fechaNacimiento,$ciudad,$cp,$colonia,$calle,$numero,$detalle){
		try{
		$this->dni=$dni;
		$this->nombre=$nombre;
		$this->aPaterno = $aPaterno;
		$this->aMaterno = $aMaterno;
		$this->fechaNacimiento = $fechaNacimiento;
		$this->ciudad = $ciudad;
		$this->cp = $cp;
		$this->colonia = $colonia;
		$this->calle = $calle;
		$this->numero = $numero;
		$this->detalle = $detalle;
		$this->CLIENTE_dni = $dni;
		//echo "holaaa";
		$this->update();
	}
	catch (Exception $e) {
			throw $e;
	}
	}*/
	/*public function update(){
		try{
		$con = DBConexion::getInstance();
				$params = array(
				$this->nombre,
				$this->aPaterno,
				$this->aMaterno,
				$this->fechaNacimiento
			);
		$sql1 = vsprintf("UPDATE cliente SET nombre='%s', aPaterno='%s',aMaterno='%s',fechaNacimiento='%s' WHERE dni=$this->dni;", $params);
		//echo $sql1;
		$con->executeUpdate(array($sql1));
		$params1 = array(
			$this->ciudad,
			$this->cp,
			$this->colonia,
			$this->calle,
			$this->numero,
			$this->detalle
			);
		$sql2 = vsprintf("UPDATE direccion_cliente SET ciudad='%s', cp=%s,colonia='%s',calle='%s',numero=%s,detalle='%s' WHERE CLIENTE_dni=$this->CLIENTE_dni;", $params1);
		//echo $sql2;
				$con->executeUpdate(array($sql2));
			}
			catch (Exception $e) {
					throw $e;
			}
	}*/
	/*public function eliminarCliente($id){
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
$sql1 = vsprintf("DELETE FROM cliente WHERE dni = %s", $id);
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
}*/

public function crearInventario($nombre, $aPaterno, $aMaterno, $fechaNacimiento,$ciudad,$cp,$colonia,$calle,$numero,$detalle/*, $DIRECCION_idDireccion*/){
//Dia de trabajo en el ingenio.
try{
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
//echo "holaaa";
$this->guardar();
}
catch (Exception $e) {
throw $e;
}
}

public function guardar(){
//Solicito un objeto conexion, usando el patron Singleton
try {
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
//echo "holsfdasd";
$sql1 = vsprintf("INSERT INTO cliente(nombre,aPaterno,aMaterno,fechaNacimiento) VALUES('%s', '%s', '%s','%s');", $params);
//echo $sql1;
$con->executeUpdate(array($sql1));
//$sql2 = vsprintf("SELECT max(dni) as dni FROM cliente;");
//echo $sql2;
//$CLIENTE_dni = $con->executeUpdate(array($sql2));
//echo "HASTA AQUI BIEN";
//$CLIENTE_dni = $con->executeQuery('SELECT max(dni) as dni FROM cliente;',null, __NAMESPACE__.'\ClienteModel');
$sql= "SELECT max(dni) as dni FROM cliente;";
$DNI = $con->executeQuery($sql);
//print_r($DNI[0]->dni);
$CLIENTE_dni = $DNI[0]->dni;
//return $CLIENTE_dni;
//echo "PASO ESTO";
$params1 = array(
$this->ciudad,
$this->cp,
$this->colonia,
$this->calle,
$this->numero,
$this->detalle,
$CLIENTE_dni
);
//print_r($params1);
$sql3 = vsprintf("INSERT INTO direccion_cliente(ciudad,cp,colonia,calle,numero,detalle,CLIENTE_dni) VALUES('%s', %s, '%s', '%s', %s, '%s', %s);", $params1);
$con->executeUpdate(array($sql3));
//echo $sql3;
//echo "PASOOO TODO";
} catch (Exception $e) {
throw $e;
}
}
public function listarInventarios(){
try{
$con = DBConexion::getInstance();
if (is_null($con)) {
throw new Exception("Error en la conexion a la base de datos, verifique",1);
}
$clientes = $con->executeQuery('SELECT * FROM cliente;',null, __NAMESPACE__.'\ClienteModel');
return $clientes;
}
catch (Exception $e) {
throw $e;
}
}

/*public function getClienteById($id){
try{
$con = DBConexion::getInstance();
if (is_null($con)) {
throw new Exception("Error en la conexion a la base de datos, verifique",1);
}
$cliente = $con->executeQuery("SELECT * FROM cliente WHERE dni = ?;",array($id), __NAMESPACE__.'\ClienteModel');
return $cliente;
}
catch (Exception $e) {
throw $e;
}
}*/

/*public function getClienteDireccionById($id){
try{
$con = DBConexion::getInstance();
if (is_null($con)) {
throw new Exception("Error en la conexion a la base de datos, verifique",1);
}
$dir = $con->executeQuery("SELECT * FROM direccion_cliente WHERE CLIENTE_dni = ?;",array($id), __NAMESPACE__.'\ClienteModel');
//var_dump($dir);
return $dir;
}
catch (Exception $e) {
throw $e;
}
}*/
}
?>