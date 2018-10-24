<?php

	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/categoria.php');

	$categoria = new Categoria();
	$categorias = $categoria->fecth_all();
	$_SESSION['ultima_pagina'] = "categorias";
	
	if(isset($_SESSION['logged_in'])) {
		if(isset($_POST['title'])) {
			$title = $_POST['title'];
			
			if (empty($title)) {
				$error = "El nombre de la categoría no se puede dejar en blanco";
			} else {
				//publicamos
				$query = $pdo->prepare('INSERT INTO categorias (nombre) VALUES (?)');
				
				$query->bindValue(1, $title);
				
				$query->execute();
				
				header('Location: categorias.php');
			}
		} else if(isset($_GET['id'])) {
			$id = $_GET['id'];
			
			$query = $pdo->prepare('DELETE FROM categorias WHERE id_categoria = ?');
			
			$query->bindValue(1, $id);	
			
			if ($query->execute()) {
				header('Location: categorias.php');
			} else
				$error = "Esa categoria está siendo usada por una entrada del blog. <br>Cámbiala para poder borrarla";
		} else if(isset($_GET['modificar_id'])) {
			$id = $_GET['modificar_id'];
			$nombre = $_POST['nombre'];
			
			if (empty($nombre)) {
				$error = "El nombre de la categoría no se puede dejar en blanco";
			} else {
				$query = $pdo->prepare('UPDATE categorias SET nombre = ? WHERE id_categoria = ?');
				
				$query->bindValue(1, $nombre);
				$query->bindValue(2, $id);
				
				$query->execute();
				
				header('Location: categorias.php');
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

		<?php include_once('../includes/header.php'); ?>

		<!-- Main -->
				<section id="main" class="wrapper">
					<div class="inner">
						<header class="major">
							<div class="row">
								<div class="col-6 col-12-medium">
									<h2>Categorías</h2>
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
							<div align="center">
								<div style="max-width:500px">
									<form action="categorias.php" method="post" autocomplete="off">
										<div class="row">
											<div class="col-8 col-12-medium" >
												<input style=" font-size: 19px; margin-top:10px" type="text" name="title" placeholder="Nueva Categoría" maxlength="30"/>
											</div>
											<div class="col-4 col-12-medium">
												<input type="submit" style=" font-size: 16px; margin-top:10px" class="button primary fit" value="AÑADIR">
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="table-wrapper" align="center">
								<table style="max-width:600px;">
									<tbody width="1000px">
										<?php 
											foreach($categorias as $categoria) {
										?>
										<tr class="caja-categorias">
											<td id="contenido_caja_<?php echo $categoria['id_categoria'] ?>" class="categorias-tabla" >
												<div style="padding-bottom:20px;">
													<div id="span1" style="float: left; padding-top: 8px;">
														<font size="5"><?php echo $categoria['nombre'] ?></font>
													</div>
													<?php if($categoria['id_categoria'] != 1) { ?>
													<div id="span2" class="row-categorias">
														<a onclick="editar(<?php echo $categoria['id_categoria'] ?>);" class="button primary icon fa-pencil-square-o">EDITAR</a> 
														<a href="categorias.php?id=<?php echo $categoria['id_categoria'] ?>" class="button rojo icon fa-trash">BORRAR</a>
													</div>
													<?php } else { ?>
													<div id="span2" class="row-categorias">
														<a class="button primary disabled icon fa-pencil-square-o">EDITAR</a> 
														<a class="button rojo disabled icon fa-trash">BORRAR</a>
													</div>
													<?php } ?>
												</div>
											</td>
											<td id="editar_caja_<?php echo $categoria['id_categoria'] ?>" style="padding-left:20px;padding-right:20px;" hidden>
												<form method="post" action="categorias.php?modificar_id=<?php echo $categoria['id_categoria'] ?>" style="margin-bottom:0px;">
													<div class="row">
														<div class="col-6 col-12-medium" >
															<input type="text" name="nombre" id="nombre" value="<?php echo $categoria['nombre'] ?>" style=" font-size: 20px;"  maxlength="30"/>
														</div>
														<div class="col-6 col-12-medium" style="margin-top:8px;">
															<input type="submit" value="GUARDAR" class="primary" />
															<a onclick="cierra_editar(<?php echo $categoria['id_categoria'] ?>);"  class="button">CANCELAR</a>
														</div>
													</div>
												</form>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>
		
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
			<script src="assets/js/categorias.js"></script>
	</body>
</html>
		
		<?php
	} else {
		header('Location: login.php');
	}
?>
