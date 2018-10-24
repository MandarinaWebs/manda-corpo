<?php

	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/article.php');
	include_once('../includes/categoria.php');
	include_once('../includes/basics.php');
	
	//Necesitamos saber las categorias
	$categoria = new Categoria();
	$categorias = $categoria->fecth_all();
	
	if(isset($_SESSION['logged_in'])) {
		$_SESSION['ultima_pagina'] = "editar";
		$contenido = "";
		$titulo = "";
		
		//Cogemos el nombre de la foto que esta en la BD
		$article = new Article();
		$data = $article->fecth_data_id($_GET['id']);
		$fotoTitulo = $data['foto'];
		
		if(isset($_POST['title'], $_POST['textarea'])) {
			//SI se ha llegado desde el formulario
			$title = $_POST['title'];
			$content = $_POST['textarea'];
			
			if (empty($title) or empty($content)) {
				//Si no hay nada vacío
				$error = "Todos los campos son obligatorios";
			} else {
				//publicamos
				if(isset($_GET['id'])) {
					//Y no se ha perdido el GET
					$id = $_GET['id'];
					$query = $pdo->prepare('UPDATE articles SET article_title = ?, article_content = ?, foto = ?, etiquetas = ?, categoria = ?, meta_description = ?, usuario = ?, borrador = ?, foto_visible = ?, url = ?, article_timestamp_edit = ? WHERE article_id = ?');
					
					if ($_POST['saca_foto'] == 'saca')
						$saca_foto = TRUE;
					else
						$saca_foto = FALSE;
					
					$categoria = $_POST['categoria'];
					if(isset($_POST['etiquetas'])) {
						$etiquetas = $_POST['etiquetas'];
						$etiquetasString = implode(" ||| ", $etiquetas);
						$etiquetasSeo = implode(", ", $etiquetas);
					} else {
						$etiquetasString = "";
						$etiquetasSeo = "";
					}

					if(!empty($_POST['metaDescription'])) {
					$metaDescription = $_POST['metaDescription'];
						} else {
							$metaDescription = "";
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
					
					//Actualizar foto
					if(isset($_POST['actualizarFoto'])){
					$actualizarFoto = $_POST['actualizarFoto'];
					$route = "./images/imagenesPosts/";

						if($actualizarFoto == 0){
							//No hay cambios en la foto actual


						} elseif ($actualizarFoto == 1) {
							//Se actualiza por otra foto
							
							$archivoOriginal = $_FILES['file']['tmp_name'];

							if($fotoTitulo == "noPhoto.jpg"){
								//No tenía foto, se busca nueva ruta

								//Cogemos la extension del archivo original
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
											$fotoTitulo = $nombreArchivo;
											echo("All right");
										} else {
											//Error al subir el archivo
											//$error = "Vaya, parece que ha habido un problema subiendo la foto";
											echo("No, esto va jodido");
										}
										
									} else {
										//Ya existe un archivo con el mismo nombre, vamos a cambiarlo aumentando 1
										$imgNumber++;
										$imgNumberString = "$imgNumber" . ".";
										$nombreArchivo= $imgNumberString . $extension;
										$rutaFinal = $route . $imgNumberString . $extension;
										}
								}

							} else{
								//Tenía foto, se sube a la misma ruta

								$rutaFinal = $route . $fotoTitulo;

								if(move_uploaded_file($archivoOriginal, $rutaFinal)){
									echo("Se ha podido actualizar la foto bien");
									} else {
									echo ("No se ha actualizado la foto");
									}
								}
						} elseif ($actualizarFoto == 2) {
							//Se borra la foto actual y se deja el post sin foto
							$rutaFinal = $route . $fotoTitulo;
							unlink($rutaFinal);
							$fotoTitulo = "noPhoto.jpg";

						}

					}
					
					//Borramos el anterior artículo
					$urlActual = $data['url'];
					$path = "../" . $urlActual . ".php";
					unlink($path);
					
					//Guardamos el titulo y preparamos la url
					
					$tituloClean =  get_url($title);
					$url = "../" . $tituloClean . ".php";
					if(file_exists($url)) {
						$tituloClean .= "+2";
						$url = "../" . $tituloClean . ".php";
					}
					
					
					$query->bindValue(1, $title);
					$query->bindValue(2, $content);
					$query->bindValue(3, $fotoTitulo);
					$query->bindValue(4, $etiquetasString);
					$query->bindValue(5, $categoria);
					$query->bindValue(6, $metaDescription);
					$query->bindValue(7, $_SESSION['user_id']);
					$query->bindValue(8, $borrador);
					$query->bindValue(9, $saca_foto);
					$query->bindValue(10, $tituloClean);
					$query->bindValue(11, time());
					$query->bindValue(12, $id);
					
					$query->execute();
					
					//Escribimos el nuevo file
					$fp = fopen($url, 'w');
					$fichero = $url;
					$plantilla = file_get_contents('articulo.php');
					
					$plantilla = str_replace("{{{articulo_titulo}}}", $title, $plantilla);
					$plantilla = str_replace("{{{articulo_etiquetas}}}", $etiquetasSeo, $plantilla);
					$content = str_replace("images/imagesTextArea", "./admin/images/imagesTextArea", $content);
					$plantilla = str_replace("{{{articulo_contenido}}}", $content, $plantilla);
					$plantilla = str_replace("{{{articulo_metaDescription}}}", $metaDescription, $plantilla);
					
					file_put_contents($fichero, $plantilla);
					fclose($fp);
					
					header("Location: cms.php?id=success");
				} else {
					echo "Vaya :S Parece que algo ha salido mal";
				}
			}
		} else {
			//Ponemos los datos
			if(isset($_GET['id'])) {
				
				$article = new Article();
				$data = $article->fecth_data_id($_GET['id']);
				$titulo = $data['article_title'];
				$contenido = preg_replace('#<br\s*/?>#i', "", $data['article_content']);
				
				//Extras
				$saca_foto = $data['foto_visible'];
				$foto = $data['foto'];
				$categoria_guardada = $data['categoria'];
				if($data['etiquetas'] != "") {
					$etiquetas = explode(" ||| ", $data['etiquetas']);
				} else {
					$etiquetas = [];	
				}
				
			} else {
				echo "Vaya, parece que falta el número de indentificación del artículo";
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
			<form onsubmit="return validarImagen();" enctype="multipart/form-data" action="editar.php?id=<?php echo $_GET['id']; ?>" method="post" autocomplete="off">
				<section id="main" class="wrapper sidebar left">
					<div class="inner">
						<header class="major">
							<div class="row">
								<div class="col-6 col-12-medium">
									<h2>EDITAR ARTÍCULO</h2>
								</div>
							</div>
						</header>
						<?php //echo $data['article_content'] ?>
						<div class="content">
							<?php if(isset($error)){ ?>
								<div class="alert">
								  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
									<strong class="strongMssg">Atención: </strong><?php echo $error; ?>
								</div>
							<?php } ?>
							<h4>TÍTULO</h4>
							<input type="text" name="title" id="title" placeholder="Título" value="<?php echo $titulo ?>" style="font-size:24px;"/><br />
							<h4>CONTENIDO</h4>
							
							<textarea rows="10" name="textarea" id="textarea"><?php echo $data['article_content'] ?></textarea>
							<br />
							<br />
							<input type="submit" onclick="noEmpty();" name="submit" class="button fit" value="Guardar como borrador"><br /><br />
							<input type="submit" onclick="noEmpty();" name="submit" class="button primary fit" value="Publicar"> 
							
						</div>
						<!-- Sidebar -->
						<div class="sidebar">
							<section>
								<h4>Foto de portada</h4>
								<span class="inputfile">
									<input type="file" name="file" id="file">
								</span>
								<label for="file">
									<span>Seleccionar otra foto</span>
								</label>
								<?php 
								$tiempo = time();
								if(isset($foto)) echo '<br><img width ="100%" class="fit" id="fotoPost" style="display: inline;" src="./images/imagenesPosts/' .$foto . '?time='.$tiempo.'">' 
								?>

								<br><br>
								<input type="button" id="botonBorrar" onclick="limpiarInputFile();" value="Borrar foto" class="fit" style="display: inline;" />
								<input type="hidden" id="actualizarFoto" name="actualizarFoto" value="0">

								<br /><br />
								<input type="checkbox" id="saca_foto" name="saca_foto" value="saca" <?php
								 if ($saca_foto == 1){?> checked="checked" <?php } ?>>
								<label for="saca_foto">Muestra foto al principio del artículo</label>
								
								<h4>Categoría</h4>
								<select id="categoria" name="categoria">
									<?php 
										foreach($categorias as $categoria) {
									?>
										<option value="<?php echo $categoria['id_categoria']; ?>" <?php if ($categoria['id_categoria'] == $categoria_guardada){?> selected <?php } ?>>
											<?php echo $categoria['nombre']; ?>
										</option>
										
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
								
								<ul id="lista_etiquetas">
								<?php 
										foreach($etiquetas as $etiqueta) {
									?>
									<li>
										<a onclick='parentNode.parentNode.removeChild(parentNode)'>
											<?php echo $etiqueta; ?>
										</a>
										<input type='hidden' name='etiquetas[]' value='<?php echo $etiqueta; ?>'/>
									</li>
									<?php } ?>
								</ul>
								<small>Haz clic en la etiqueta para borrarla</small>
								<h4>Meta descripcion</h4>
								<div class="row">
									<div class="col-12 col-12-small">
										<div class="field">
											<textarea class="noSelector" name="metaDescription" id="metaDescription" placeholder="Meta Description" rows="5"><?php echo $data['meta_description'] ?></textarea>
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
			<script src="assets/js/inputsEdit.js"></script>
	</body>
</html>
		<?php
	} else {
		header('Location: login.php');
		
	}
?>