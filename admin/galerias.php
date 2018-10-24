<?php

	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/article.php');
	include_once('../includes/basics.php');

	if(isset($_SESSION['logged_in'])) {
		$_SESSION['ultima_pagina'] = "galerias";
	?>
		<html>
	<head>
		<title>Panel de Control</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./assets/css/main.css" />
	</head>
	<body class="is-preload">

		<?php include_once('../includes/header.php'); ?>

		<!-- Main -->
			<section id="main" class="wrapper sidebar left">
				<div class="inner">
					<header class="major">
						<div class="row">
							<div class="col-6 col-12-medium">
								<h2>PANEL DE CONTROL</h2>
							</div>
							
						</div>
					</header>
					<!-- The Modal -->
					<div id="myModal" class="modal">
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
					<!-- Content -->
					<div class="content">
						<h2>GALERÍAS</h2>
						<br>

						<div class="box alt">
							<div class="row gtr-uniform gtr-50">

								<div class="col-3 col-6-xsmall"><span class="image fit"><a href="galeriaDefinitiva2.php?galeria=1"><img class="col-4" src="./images/iconoGaleria.png"></a><a class="fit button" style="margin-top: 10px;" href="galeriaDefinitiva2.php?galeria=1">Galería 1</a></span></div>

								<div class="col-3 col-6-xsmall"><span class="image fit"><a href="galeriaDefinitiva2.php?galeria=2"><img class="col-4" src="./images/iconoGaleria.png"></a><a class="fit button" style="margin-top: 10px;" href="galeriaDefinitiva2.php?galeria=2">Galería 2</a></span></div>

								<div class="col-3 col-6-xsmall"><span class="image fit"><a href="galeriaDefinitiva2.php?galeria=3"><img class="col-4" src="./images/iconoGaleria.png"></a><a class="fit button" style="margin-top: 10px;" href="galeriaDefinitiva2.php?galeria=3">Galería 3</a></span></div>

								<div class="col-3 col-6-xsmall"><span class="image fit"><a href="galeriaDefinitiva2.php?galeria=4"><img class="col-4" src="./images/iconoGaleria.png"></a><a class="fit button" style="margin-top: 10px;" href="galeriaDefinitiva2.php?galeria=4">Galería 4</a></span></div>

							</div>
						</div>
					</div>
					<!-- Sidebar -->
					<div class="sidebar">
						<section>
							<ul class="actions fit">
								<li><a href="./cms.php" class="button fit">BLOG</a></li>
							</ul>
							<ul class="actions fit">
								<li><a href="./galerias.php" class="button primary fit">GALERÍA</a></li>
							</ul>
							<ul class="actions fit">
								<li><a onclick="bloqueado()" class="button fit icon fa-lock">CATÁLOGO</a></li>
							</ul>
						</section>
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
			<script src="assets/js/popups.js"></script>

	</body>
</html>
		<?php
	} else {
		header('Location: login.php');
		
	}
?>