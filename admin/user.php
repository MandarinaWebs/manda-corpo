<?php

	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/user.php');

	if(isset($_SESSION['logged_in'])) {
		$_SESSION['ultima_pagina'] = "user";
		//Necesitamos saber las categorias
		$user = new User();
		$datos_user = $user->fecth_data($_SESSION['user_id']);
		$fotoTitulo = $datos_user['fotoURL'];

		if(isset($_POST['nombre'], $_POST['apellidos'])) {
			if (empty($_POST['nombre']) or empty($_POST['apellidos'])) {
				//Si no hay nada vacío
				$error = "Todos los campos son obligatorios";
			} else {

				$id = $_SESSION['user_id'];
				$query = $pdo->prepare('UPDATE user SET user_name = ?, user_password = ?, descripcion = ?, apellido = ?, fotoURL = ?  WHERE user_id = ?');


				$pass = $datos_user['user_password'];

				//ACTUALIZAR FOTO
				if(isset($_POST['actualizarFoto'])){
					$actualizarFoto = $_POST['actualizarFoto'];
					$route = "./images/fotoUser/";

						if($actualizarFoto == 0){
							//No hay cambios en la foto actual

						} elseif ($actualizarFoto == 1) {
							//Se actualiza por otra foto
							$archivoOriginal = $_FILES['file']['tmp_name'];

							if($fotoTitulo == "defaultUser.png"){
								//No tenía foto, se busca nueva ruta
								//Cogemos la extension del archivo original
								$nombreFoto = $_FILES['file']['name'];
								$extension = end(explode(".", $nombreFoto));

								//La foto de perfil se llamará como el id_user
								$idUser = $datos_user['user_id'];
								$idUserString = "$idUser" . ".";
								$nombreArchivo= $idUserString . $extension;

								//Ruta donde se guardará la imagen
								$rutaFinal = $route . $nombreArchivo;

								if(move_uploaded_file($archivoOriginal, $rutaFinal)){
									$fotoTitulo = $nombreArchivo;
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
							if($fotoTitulo!="defaultUser.png"){
								unlink($rutaFinal);
								$fotoTitulo = "defaultUser.png";
							}

						}

					}
				
				
				//Si ha rellenado su antigua contraseña
				if((empty($_POST['pass']) && !empty($_POST['passNew2'])) || (empty($_POST['pass']) && !empty($_POST['passNew'])))
					$error = "Debes escribir tu antigua contraseña";
				if(isset($_POST['pass']) && !empty($_POST['pass'])){
					
					//Si coincide con la antigua
					if(md5($_POST['pass']) == $pass) {
						
						//Si no ha dejado en blanco la nueva
						if(isset($_POST['passNew']) && !empty($_POST['passNew'])) {
							
							//Si no ha dejado en blanco la nueva repetida
							if(isset($_POST['passNew2']) && !empty($_POST['passNew2'])) {
								
								//Si no ha dejado en blanco la nueva repetida
								if($_POST['passNew2'] == $_POST['passNew']) {
									$pass = md5($_POST['passNew']);
								} else {
									$error = "Las contraseñas no coinciden";
								}
							} else {
								$error = "Por favor, repite la contraseña";
							}
						} else {
							$error = "La contraseña no puede estar vacía";
						}
						
					} else 
						$error = "Tu contraseña antigua es incorrecta";
				}
				
				if(!isset($error)){
					$nombre = $_POST['nombre'];
					$apellidos = $_POST['apellidos'];
					if(isset($_POST['descripcion']))
						$descripcion = $_POST['descripcion'];
					else
						$descripcion = "Sin descripción";


					$query->bindValue(1, $_POST['nombre']);
					$query->bindValue(2, $pass);
					$query->bindValue(3, $descripcion);
					$query->bindValue(4, $_POST['apellidos']);
					$query->bindValue(5, $fotoTitulo);
					$query->bindValue(6, $_SESSION['user_id']);
					
					$query->execute();
					
					header("Location: user.php?id=success");
				}
			}
		}
		?>
		<html>
	<head>
		<title>Panel de Control</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="cms.html">PANEL DE CONTROL</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../index.php">Volver al Blog</a></li>
						<li><a href="cms.php">Panel de Control</a></li>
						<li><a href="logout.php">Cerrar Sesión</a></li>
					</ul>
				</nav>
			</header>
			<!-- Main -->
			<form onsubmit="return validarImagen();" enctype="multipart/form-data" action="user.php" method="post" autocomplete="off">
				<section id="main" class="wrapper sidebar left">
					<div class="inner">
						<header class="major">
							<div class="row">
								<div class="col-6 col-12-medium">
									<h2>EDITAR ARTÍCULO</h2>
								</div>
							</div>
						</header>
						
						<div class="content">
							<?php 
						if(isset($_GET['id']) && !isset($error)) 
							if($_GET['id'] == "success"){
								$mensaje = "Se ha modificado correctamente";
							}
						
						
						?>
								
						<?php if(isset($mensaje)){?>
							<div class="succes">
								<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
								<strong class="strongMssg">¡Fantástico!</strong> <?php echo $mensaje;?>
							</div>
						<?php } ?>
						
							<?php if(isset($error)){ ?>
								<div class="alert">
								  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
									<strong class="strongMssg">Atención: </strong><?php echo $error; ?>
								</div>
							<?php } ?>
							<h4>Nombre</h4>
							<input type="text" name="nombre" placeholder="Título" value="<?php echo $datos_user['user_name']; ?>" style="font-size:24px;"/><br />
							<h4>Apellidos</h4>
							<input type="text" name="apellidos" placeholder="Título" value="<?php echo $datos_user['apellido']; ?>"/><br />
							<h4>Correo</h4>
							<p><font size="6"><?php echo $datos_user['correo']; ?></font></p><br />
							<h4>Descripción</h4>
							<textarea rows="3" cols="50" placeholder="Descripción" name="descripcion"><?php echo $datos_user['descripcion']; ?></textarea> <br />
							
							<h4>Cambio de contraseña</h4>
							<table class="alt">
								<tbody>
									<tr>
										<td class="inputPasswords">
											<h3>Introduce tu contraseña antigua</h3>
											<input type="password" name="pass" placeholder="Contraseña Antigua" value="" /><br />
											<h3>Introduce la nueva contraseña</h3>
											<input type="password" name="passNew" id="passNew" placeholder="Nueva Contraseña" value="" onblur="comprueba()" o="cierra()" oninput="escribiendo()"/><br />
											<h3>Repite la nueva contraseña</h3>
											<input type="password" name="passNew2" id="passNew2" placeholder="Nueva Contraseña" value="" onblur="comprueba()" oninput="escribiendo()" onclick="cierra()"/><br />
											<div class="alert" id="no_coinciden" hidden>
												<strong class="strongMssg">¡Las contraseñas no coinciden!</strong>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							
							<input type="submit" class="button primary fit" value="Guardar"><br /><br />
						</div>
						<!-- Sidebar -->
						<div class="sidebar">
							<section>
								<h4>Foto de portada</h4>
								<div align="center">
									<?php 
									$tiempo = time();
									if(isset($fotoTitulo)) echo '<br> <div align="center" id="fotoUser" style="display: inline;"><div class="circle-container"> <img class="circle-img" src="./images/fotoUser/' .$fotoTitulo . '?time='.$tiempo.'"></div></div>' 
									?>
									<br><br>
									<span class="inputfile">
										<input type="file" name="file" id="file">
									</span>
									<label for="file">
										<span>Seleccionar otra foto</span>
									</label>
									<input type="button" class="fit" id="botonBorrar" onclick="limpiarInputFile();" value="Borrar foto" style="display: inline;"/>
									<input type="hidden" id="actualizarFoto" name="actualizarFoto" value="0">
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
			<script src="assets/js/inputsUser.js"></script>
	</body>
</html>
		<?php
	} else {
		header('Location: login.php');
		
	}
?>