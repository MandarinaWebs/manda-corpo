<?php
	$dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	
	function recorta_string($string) {
		$string = limpia($string);
		$palabras = 20;
		$retval = $string;      //  Just in case of a problem
		$array = explode(" ", $string);
		if (count($array) <= $palabras) {
			$retval = $string;
		}
		else {
			array_splice($array, $palabras);
			$retval = implode(" ", $array)." ...";
		}
		return $retval;
	}
	
	function get_url($string) {
		$string = str_replace("ñ", "n", $string );
		$string = str_replace("á", "a", $string );
		$string = str_replace("é", "e", $string );
		$string = str_replace("í", "i", $string );
		$string = str_replace("ó", "o", $string );
		$string = str_replace("ú", "u", $string );
		$string = str_replace("à", "a", $string );
		$string = str_replace("è", "e", $string );
		$string = str_replace("ì", "i", $string );
		$string = str_replace("ò", "o", $string );
		$string = str_replace("ù", "u", $string );
		$string = str_replace("Ñ", "N", $string );
		$string = str_replace("Á", "A", $string );
		$string = str_replace("É", "E", $string );
		$string = str_replace("Í", "I", $string );
		$string = str_replace("Ó", "O", $string );
		$string = str_replace("Ú", "U", $string );
		$string = str_replace("À", "A", $string );
		$string = str_replace("È", "E", $string );
		$string = str_replace("Ì", "I", $string );
		$string = str_replace("Ò", "O", $string );
		$string = str_replace("Ú", "U", $string );
		
		$string = str_replace(" ", "-", $string);
		$string = strtolower(urlencode(preg_replace('/[^0-9a-zA-Z_\s_-]/', "", $string)));
		
		return $string;
	}
	
	function limpia ($string) {
		$string =  str_replace("<br>", "", $string );
		$string =  str_replace("<br />", "", $string );
		$string =  str_replace("<br >", "", $string );
		$string =  str_replace("&nbsp;", "", $string );
		
		return preg_replace('/<[^<]+?>/', '', $string);
	}
?>