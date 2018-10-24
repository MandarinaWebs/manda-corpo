<?php

	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/article.php');
	include_once('../includes/basics.php');

	if(isset($_SESSION['logged_in'])) {
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
						<section class="oculta-pc">
								<h2>MENU</h2>
								<ul class="actions fit">
									<li><a href="./cms.php" class="button fit">BLOG</a></li>
								</ul>
								<ul class="actions fit">
									<li><a href="./galerias.php" class="button primary fit">GALERÍA</a></li>
								</ul>
								<ul class="actions fit">
									<li><a href="./catalogo.php" class="button fit">CATÁLOGO</a></li>
								</ul>
						</section>
					<?php 

						$galeria=$_GET["galeria"];
						$directory="/images/";
						$titulo="title";

						switch ($galeria) {
					    case 1:
					        $directory="./images/img/";
					        $titulo="Galeria 1";

					        break;
					    case 2:
					       $directory="./images/img2/";
					       $titulo="Galeria 2";
					        break;
					    case 3:
					       $directory="./images/img3/";
					       $titulo="Galeria 3";
					        break;

					    case 4:
					        $directory="./images/img4/";
					        $titulo="Galeria 4";
					        break;
						}
						
						echo '<h2>'.($titulo).'</h2>';

						echo '<br> <br>';

						echo '<div class="box alt">
								<div class="row gtr-uniform gtr-50">';



					$dirint = dir($directory);
					while (($archivo = $dirint->read()) !== false){

				       	if( (fnmatch("*jpg", strtolower($archivo))) || (fnmatch("*png", strtolower($archivo))) || (fnmatch("*jpeg", strtolower($archivo))) ){
				       		$tiempo = time();
				         echo '<div class="col-3 col-6-small"><span class="image fit"><img class="image" src="'.$directory.$archivo.'?time=' .$tiempo.'"/>'."\n";
				          echo '<a class="fit button" style="margin-top: 10px;" href="deleteImg.php?archivo='.$directory."/".$archivo.'&galeria='.$galeria.'">Borrar</a></span></div>'."\n";


			         	}
			   		 }

			   		 $dirint->close();

			   		 echo '<br> <br>';
			   		 echo '<div class="col-12"><a class="button primary boton fit" href="subirArchivos2.php?galeria='.$galeria.'">Subir fotos</a></div>'."\n";

			   		 echo '</div>
							</div>';
					?>
					</div>
					<!-- Sidebar -->
					<div class="sidebar">
						<section class="oculta-movil">
							<ul class="actions fit">
								<li><a href="./cms.php" class="button fit">BLOG</a></li>
							</ul>
							<ul class="actions fit">
								<li><a href="./galerias.php" class="button primary fit">GALERÍAS</a></li>
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