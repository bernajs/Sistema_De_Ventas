<?php
/*
* CONSTANTES DE TIPOS DE DETECCION DE ERRORES
* E_ERROR: 
*/
//error_reporting(E_STRICT);

define('CONTROLADOR_DEFECTO', "Main");
define('METODO_DEFECTO', "index");
define ('URI', $_SERVER['REQUEST_URI']);
define('URL_BASE', "/sistema_de_ventas");
define('RUTA_BASE',dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

?>