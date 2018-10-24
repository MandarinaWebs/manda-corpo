<?php
	try {
		//Ejemplo webEmpresa
		$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
		//configuración Xampp
		//$pdo = new PDO('mysql:host=localhost;dbname=cursos', 'root', '');
	} catch (PDOException $e) {
		exit ('');
	}
?>