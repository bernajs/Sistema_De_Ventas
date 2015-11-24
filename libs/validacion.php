<?php
class Validacion{
//Definimos un array privado donde almacenar los errores cuando no se cumpla la condicion
	private $error;

	//Validacion de texto con espacios y sin espacios
	//Posibilidad de enviar longiud minima y maxima de la cadena de texto

	public function validaTexto($text, $min=false, $max=false, $espacios=true, $mensaje='')
	{
		if (!empty($min)) {
			if (strlen($text) < $min) {
				$this->error[] = $mensaje;
				return false;
			}
		}

		if (!empty($max)) {
			$this->error[] = $mensaje;
			return false;
		}

		if ($espacios) {
			$res = ereg("^[A-Za-z0-9\ ]+$", $text);
		}
		else{
			$res = ereg("^[A-Za-z0-9\ ]+$", $text);
		}

		if ($res) {
			return true;
		} else{
			$this->error[] = $mensaje;
			return false;
		}
	}

	//Validacion de direcciones de email

	public function validaEmail($email, $dominio='', $mensaje=''){
		$res = ereg("^[^@ ]+@[^@ ]+\.[@ \.]+$", $trim($email));
		if($res){
			return true;
		}
		else{
			$this->error[] = $mensaje;
			return false;
		}
	}

	//Validacion de numeros
	public function validaNumero($num, $min=false,$max=false, $mensaje=''){
		if (is_numeric($num)) {
			if ($num<$min or $num > $max) {
				$this->error[]=$mensaje;
				return false;
			}
			else{
				return true;
			}
			else{
				$this->error[]=$mensaje;
				return false;
			}
		}

		//Validacion de fechas
		public function validaFecha($fecha, $mensaje=''){
			if (($ts = strtotime($fecha))===false) {
				$this->error[] = $mensaje;
				return false;
			}else{
				return true;
			}
		}

		//Validacion de upload de archivos
		public function validaUpload($file, $max=false, $exts=false, $mensaje=''){
			//validamos el peso del archivo, el peso debe pasarse en bytes
			if ($max) {
				if ($file['size']> $max) {
					$this->error[] = $mensaje;
					return false;
				}
			}

			//Validamos la extension del archivo
			//El parametro $exts contendra en un array las extensiones permitidas para lueg, utilizando la funcion in_array
			//verificar si se muestra habilitada

			if (!empty($exts)) {
				$ext = explode('.', basename(strtolower(trim($file['name']))));
				if (!in_array($ext[count($ext)-1],$exts)) {
					$this->error[]=$mensaje;
					return false;
				}
			}
			return true;
		}

		public function getEstado(){
			if (count($this->eror) > 0) {
				return this->error;
			}
			else{
				return false;
			}
		}
	}
}