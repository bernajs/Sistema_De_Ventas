<?php
namespace models;

use libs\DBConexion;

class direccionClientesModel {
	//public $dni;
	public $idDireccion;
	public $ciudad;
	public $cp;
	public $colonia;	
	public $calle;
	public $numero;
	public $detalle;

	public function __construct(){

	}

	public function listarDirecciones(){
		try{
		$con = DBConexion::getInstance();

		$direcciones = $con->executeQuery('SELECT * FROM direccion_cliente;',null,'direccionClientesModel');
		return $direcciones;
	}
	catch (Exception $e) {
		throw $e;	
	}

	}

	public function crearInventario($nombre, $aPaterno, $aMaterno, $fechaNacimiento/*, $DIRECCION_idDireccion*/){
		try{
		//Dia de trabajo en el ingenio.
		$this->nombre=$nombre;
		//Produccion y demanda del dia
		$this->aPaterno = $aPaterno;
		$this->aMaterno = $aMaterno;
		$this->fechaNacimiento = $fechaNacimiento;
		//$this->DIRECCION_idDireccion = $DIRECCION_idDireccion;	

		
		echo "holaaa";
		$this->guardar();
	}
	catch (Exception $e) {
		throw $e;	
	}
	}