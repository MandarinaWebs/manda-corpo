<?php

	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/article.php');
	include_once('../includes/basics.php');

	if(isset($_SESSION['logged_in'])) {
	$article = new Article();
	$articles = $article->fecth_all_cms();
	
	
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
				<h1 id="logo"><a href="index.html">PANEL DE CONTROL</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../blog.php">Ir al Blog</a></li>
						<li><a href="./user.php"><?php echo $_SESSION['username'] ?></a></li>
						<li><a href="logout.php">Cerrar Sesión</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper sidebar left">
				<div class="inner">
					<header class="major  oculta-movil">
						<div class="row" >
							<div class="col-6 col-12-medium">
								<h2>PANEL DE CONTROL</h2>
							</div>
							<div class="col-3 col-12-medium">
								<ul class="actions fit">
									<li><a href="./add.php" class="button primary fit">AÑADIR ARTÍCULO</a></li>
								</ul>
							</div>
							<div class="col-3 col-12-medium">
								<ul class="actions fit">
									<li><a href="./categorias.php" class="button fit">Categorías</a></li>
								</ul>
							</div>
						</div>
					</header>
					
					<!-- Content -->
					<div class="content">
						<section class="oculta-pc">
							<h2>MENU</h2>
							<ul class="actions fit">
								<li><a href="./cms.php" class="button primary fit">BLOG</a></li>
							</ul>
							<ul class="actions fit">
								<li><a onclick="bloqueado()" class="button fit icon fa-lock">GALERÍA</a></li>
							</ul>
							<ul class="actions fit">
								<li><a onclick="bloqueado()" class="button fit icon fa-lock">CATÁLOGO</a></li>
							</ul>
							<div class="row">
								<div class="col-6 col-12-medium">
									<h2>ACCIONES</h2>
								</div>
								<div class="col-3 col-12-medium">
									<ul class="actions fit">
										<li><a href="./categorias.php" class="button fit">Categorías</a></li>
									</ul>
								</div>
								<div class="col-3 col-12-medium">
									<ul class="actions fit">
										<li><a href="./add.php" class="button primary fit">AÑADIR ARTÍCULO</a></li>
									</ul>
								</div>
							</div>
						</section>
						<div class="popup" onclick="myFunction()"><h2>ARTÍCULOS</h2>
						  <span class="popuptext" id="myPopup">
							Hemos detectado <br /> que tus artículos <br />son los mejores<br />
						  </span>
						</div>

						<!-- The Modal -->
						<div id="myModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content" style="max-width:500px">
							<span class="close">&times;</span>
							<h3>Atención</h3>
							<h5>¿Estás seguro que deseas borrar el artículo?</h5>
							<div class="row" style="margin-top:40px">
								<div class="col-6 col-12-medium">
									<ul class="actions fit">
										<li><a href="" class="button rojo fit" id="borra_articulo">Borrar</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-medium">
									<ul class="actions fit">
										<li><a class="button fit" id="cancela_borrar">Cancelar</a></li>
									</ul>
								</div>
							</div>
						  </div>
						</div>
						
						<div id="bloqueado_menu" class="modal">

						  <!-- Modal content -->
						  <div class="modal-content" style="max-width:500px">
							<span class="close">&times;</span>
							<h3>Vaya :S</h3>
							<h5>Este contendo lo tienes bloqueado. <br />Si realmente lo deseas puedes contactar <br />con nosotros para ver nuestras tarifas</h5>
							<div class="row" style="margin-top:40px">
								<div class="col-6 col-12-medium">
									<ul class="actions fit">
										<li><a href="https://mandarinawebs.com/contacto.html" target="blank" class="button fit">Ir a la página web</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-medium">
									<ul class="actions fit">
										<li><a href="tel: 644758976" class="button primary fit">Llamar</a></li>
									</ul>
								</div>
							</div>
						  </div>

						</div>
						
						<?php 
						if(isset($_GET['id'])) 
							if($_GET['id'] == "success"){ 
								if($_SESSION['ultima_pagina'] == "add") {
									$mensaje = "Se ha publicado con éxito";
								} else if($_SESSION['ultima_pagina'] == "editar") {
									$mensaje = "Se ha modificado correctamente";
								}
							}
						?>
								
						<?php if(isset($mensaje)){?>
							<div class="succes">
								<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
								<strong class="strongMssg">¡Fantástico!</strong> <?php echo $mensaje;?>
							</div>
						<?php } ?>
						
						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>Título</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										foreach($articles as $article) {
									?>
									<tr>
										<td>
											<a href="../<?php echo $article['url'] ?>.php" class="entrada">
												<?php echo $article['article_title'] ?>
											</a>
											<?php
												if($article['borrador'])
													echo "<i><b><tagname style='color:red;'>(Borrador)</tagname></b></i>";
											?>
											<br />
											<small>
												<?php
													$fechaArticulo = $article['article_timestamp'];
													echo $dias[date('w', $fechaArticulo)]." ".date('d', $fechaArticulo)." de ".$meses[date('n', $fechaArticulo)-1]. " del ".date('Y', $fechaArticulo);
												?>
												- Por <b>
												<?php
													 echo $article['user_name'];
												?></b>
											</small>
										</td>
										<td class="acciones-style" style="display: table-cell; vertical-align: middle;">
											<?php
												if($article['usuario'] == $_SESSION['user_id']) {
											?>
											<!-- Si sí es el usuario -->
											<a href="editar.php?id=<?php echo $article['article_id'] ?>" class="button primary boton-cms-movil">EDITAR</a> <a onclick="borrar(<?php echo $article['article_id'] ?>, '<?php echo $article['url'] ?>')" id="borra_pre" class="button rojo boton-cms-movil">BORRAR</a>
											<?php
												} else {
											?>
											<!-- Si no es el usuario -->
											<a href="" class="button primary disabled" disabled>EDITAR</a>
											<a href="" class="button rojo disabled" disabled>BORRAR</a>
											<?php } ?>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
					    </div>
					</div>
					<!-- Sidebar -->
					<div class="sidebar">
						<section class="oculta-movil">
							<ul class="actions fit">
								<li><a href="./cms.php" class="button primary fit">BLOG</a></li>
							</ul>
							<ul class="actions fit">
								<li><a onclick="bloqueado()" class="button fit icon fa-lock">GALERÍA</a></li>
							</ul>
							<ul class="actions fit">
								<li><a onclick="bloqueado()" class="button fit icon fa-lock">CATÁLOGO</a></li>
							</ul>
						</section>
					</div>
				</div>
			</section>
			<?php include_once ("../includes/pie.php"); ?>
		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/mensaje.js"></script>
			<script src="assets/js/popups-cms.js"></script>

	</body>
</html>
		<?php
		$_SESSION['ultima_pagina'] = "cms";
	} else {
		header('Location: login.php');
		
	}
?>