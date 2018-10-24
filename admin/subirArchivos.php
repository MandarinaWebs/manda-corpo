<!DOCTYPE html>
<html>
<head>
	<title>Subir archivos</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/dropzone.css">
</head>
<body>

	

	<?php 

		$carpeta="./images/img/"; 
		$galeria=$_GET["galeria"]; 

		switch ($galeria) {
		    case 1:
		        $titulo="Galeria 1";
		        $carpeta = "./images/img/";
		        break;
		    case 2:
		       $titulo="Galeria 2";
		       $carpeta = "./images/img2/";
		        break;
		    case 3:
		       $titulo="Galeria 3";
		       $carpeta = "./images/img3/";
		        break;

		    case 4:
		        $titulo="Galeria 4";
		        $carpeta = "./images/img4/";
		        break;
			}

		echo '<h1>Subir im&aacutegenes a la ' .$titulo.'</h1>';

		echo '<form class="dropzone" id="myDrop" action="upload.php?carpeta='.$carpeta.'">
				<span class="inputfile">
					<input type="file" name="file" id="file">
				</span>
			</form>';

		echo '<a class="button" href="galeriaDefinitiva2.php?galeria='.$galeria.'">Atrás</a>';

	?>


	

	<br>


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="./assets/js/dropzone.js"></script>
	<script src="./assets/js/app.js"></script>
	

</body>
</html>