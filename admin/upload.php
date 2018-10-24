<?php

	$route = $_GET["carpeta"];

	$archivoOriginal = $_FILES['file']['tmp_name'];
	
	//cogemos la extension del archivo original
	$nombreArchivoOriginal = $_FILES['file']['name'];
	$extension = end(explode(".", $nombreArchivoOriginal));

	//Empezamos en "10000"
	$imgNumber = 10000;
	$imgNumberString = "$imgNumber" . ".";
	$nombreArchivo= $imgNumberString . $extension;

	//ruta donde se guardará la imagen
	$rutaFinal = $route . $nombreArchivo;


	$subido = false;
	$dirint = dir($route);

	while (($archivo = $dirint->read()) !== false && !$subido){

		if(!is_file($rutaFinal)){
			//No existe archivo con el mismo nomnbre en la carpeta, vamos a subirlo
			if(move_uploaded_file($archivoOriginal, $rutaFinal)){
				//Se ha podido subir el archivo, salimos del bucle
				$subido = true;
			} else {
				//Error al subir el archivo
			}
		} else {
			//Ya existe un archivo con el mismo nombre, vamos a cambiarlo aumentando 1
			$imgNumber++;
			$imgNumberString = "$imgNumber" . ".";
			$rutaFinal = $route . $imgNumberString . $extension;

		}
	}

?>