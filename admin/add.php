<?php

	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/categoria.php');
	include_once('../includes/basics.php');
	
	//Necesitamos saber las categorias
	$categoria = new Categoria();
	$categorias = $categoria->fecth_all();

	if(isset($_SESSION['logged_in'])) {
		$_SESSION['ultima_pagina'] = "add";
		if(isset($_POST['title'], $_POST['textarea'])) {
			$title = $_POST['title'];
			$textarea = $_POST['textarea'];
			if (empty($title) or empty($textarea)) {
				$error = "Todos los campos son obligatorios";
				$titleError = $title;
				$textareaError = $textarea;
			} else {
				//publicamos
				$query = $pdo->prepare('INSERT INTO articles (article_title, article_content, foto, etiquetas, categoria, meta_description, usuario, borrador, foto_visible, url, article_timestamp_edit, article_timestamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				
				//Sacamos y transformamos las variables traidas por post
				if ($_POST['saca_foto'] == 'saca')
					$saca_foto = TRUE;
				else
					$saca_foto = FALSE;
				
				$categoria = $_POST['categoria'];
				if(!empty($_POST['etiquetas'])) {
					$etiquetas = $_POST['etiquetas'];
					$etiquetasString = implode(" ||| ", $etiquetas);
					$etiquetasSeo = implode(", ", $etiquetas);
				} else {
					$etiquetasString = "";
					$etiquetasSeo = "";
				}
				if ($_POST['submit'] == 'Publicar') {
					//action for update here
					$borrador = FALSE;
				} else if ($_POST['submit'] == 'Guardar como borrador') {
					//action for delete
					$borrador = TRUE;
				} else {
					//invalid action!
					$borrador = FALSE;
				}

				//Subimos foto a la carpeta del servidor
				
				$archivoOriginal = $_FILES['file']['tmp_name'];

				if($archivoOriginal!=null){

					$route = "./images/imagenesPosts/";
					//$archivoOriginal = $_FILES['file']['tmp_name'];

					//cogemos la extension del archivo original
					$nombreFoto = $_FILES['file']['name'];
					$extension = end(explode(".", $nombreFoto));

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
								$nombreArchivo= $imgNumberString . $extension;
								$rutaFinal = $route . $imgNumberString . $extension;

							}
						}

					} else {
						$nombreArchivo = "noPhoto.jpg";
					}

					if(!empty($_POST['metaDescription'])) {
					$metaDescription = $_POST['metaDescription'];
						} else {
							$metaDescription = "";
						}
					
				//Sustituimos
				$query->bindValue(1, $title);
				$query->bindValue(2, $textarea);
				$query->bindValue(3, $nombreArchivo);
				$query->bindValue(4, $etiquetasString);
				$query->bindValue(5, $categoria);
				$query->bindValue(6, $metaDescription);
				$query->bindValue(7, $_SESSION['user_id']);
				$query->bindValue(8, $borrador);
				$query->bindValue(9, $saca_foto);
				$query->bindValue(11, time());
				$query->bindValue(12, time());
				
				$titulo = get_url($title);
				
				$url = "../" . $titulo . ".php";
				
				if(file_exists($url)) {
					$titulo .= "+2";
					$url = "../" . $titulo . ".php";
				}
				
				$query->bindValue(10, $titulo);
				$query->execute();
				
				$fp = fopen($url, 'w');
				$fichero = $url;
				$plantilla = file_get_contents('articulo.php');
				
				$plantilla = str_replace("{{{articulo_titulo}}}", $title, $plantilla);
				$plantilla = str_replace("{{{articulo_etiquetas}}}", $etiquetasSeo, $plantilla);
				$textarea = str_replace("images/imagesTextArea", "./admin/images/imagesTextArea", $textarea);
				$plantilla = str_replace("{{{articulo_contenido}}}", $textarea, $plantilla);
				$plantilla = str_replace("{{{articulo_metaDescription}}}", $metaDescription, $plantilla);
				
				file_put_contents($fichero, $plantilla);
				fclose($fp);
				
				header('Location: cms.php?id=success');
			}
		}
		?>
		
		
<html>
	<head>
		<title>Panel de Control</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<!-- Caja de texto -->
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=z7x96029t2hqn51w04l5tcml5nps66xe18gdifs106e7bfqk"></script>
		<script src="assets/js/textarea.js"></script>
	</head>
	<body class="is-preload">

		<?php include_once('../includes/header.php'); ?>

		<!-- Main -->
			<form enctype="multipart/form-data" action="add.php" method="post" autocomplete="off" onsubmit="return validarImagen();">
				<section id="main" class="wrapper sidebar left">
					<div class="inner">
						<header class="major">
							<div class="row">
							<div class="col-12 col-12-medium">
								<h2>Escribir artículo</h2>
							</div>
						</div>
						</header>
						
						<div class="content">
							<?php if(isset($error)){ ?>
								<div class="alert">
								  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
									<strong class="strongMssg">Atención: </strong><?php echo $error; ?>
								</div>
							<?php } ?>
							<h4>TÍTULO</h4>
							<input type="text" name="title" placeholder="Título" value="<?php if(isset($titleError)) echo $titleError ?>" style="font-size:24px;"/><br />
							<h4>CONTENIDO</h4>
							
							<textarea rows="10" name="textarea" id="textarea"><?php if(isset($textareaError))echo $textareaError ?></textarea>
							<br />
							<br />
							<input type="submit" name="submit" class="button fit" value="Guardar como borrador"><br /><br />
							<input type="submit" name="submit" class="button primary fit" value="Publicar"> 
						</div>
						<!-- Sidebar -->
						<div class="sidebar">
							<section>

								<h4>Foto de portada</h4>
								
								<span class="inputfile">
									<input type="file" name="file" id="file">
								</span>
								<label for="file">
									<span>Seleccionar foto</span>
								</label>

								<input type="button" id="botonBorrar" onclick="limpiarInputFile();" value="Borrar foto" style="display: none;" />

								<br /> <br />

								<input type="checkbox" id="saca_foto" name="saca_foto" value="saca" checked>
								<label for="saca_foto">Muestra foto al principio del artículo</label>
								
								<h4>Categoría</h4>
								<select id="categoria" name="categoria">
									<?php 
										foreach($categorias as $categoria) {
									?>
										<option value="<?php echo $categoria['id_categoria']; ?>"><?php echo $categoria['nombre']; ?></option>
										
									<?php } ?>
								</select>
								<br />
								<h4>ETIQUETAS</h4>
								<div class="row">
									<div class="col-8 col-12-small">
										<input type="text" name="etiquetas_text" id="etiquetas_text" placeholder="Inspiración" />
									</div>
									<div class="col-4 col-12-small">
										<a onclick="etiquetas()" class="button primary fit">+</a>
									</div>
								</div>
								<ul id="lista_etiquetas"></ul>
								<small>Haz clic en la etiqueta para borrarla</small>
								<h4>Meta descripcion</h4>
								<div class="row">
									<div class="col-12 col-12-small">
										<div class="field">
											<textarea class="noSelector" name="metaDescription" id="metaDescription" placeholder="Meta Description" rows="5"></textarea>
										</div>
									</div>
									
								</div>
							</section>
						</div>
					</div>
				</section>
			</form>

			
			
		<?php include_once('../includes/pie.php'); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/etiquetas.js"></script>
			<script src="assets/js/mensaje.js"></script>
			<script src="assets/js/inputsAdd.js"></script>
	</body>
	</html>
		<?php
	} else {
		header('Location: login.php');
	}
?>