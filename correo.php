<!DOCTYPE HTML>

<html>
	<head>
		<title>Untitled</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="./images/cursos-mandarinawebs-logo.png">
		<meta name="author" content="Mandarina Webs">
		<meta name="google-site-verification" content="N-zqvZimO8ooEIjnJ5r97JZHz6c6idUfXBL8_kW_GFI" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113022194-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-113022194-1');
		</script>

	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<div class="logo">
						<a href="index.html">Cursos MandarinaWebs</a>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="./">Inicio</a></li>
							<li><a href="./quienes-somos.html">Quiénes somos</a></li>
							<li>
								<a class="icon fa-angle-down">Formacion</a>
								<ul>
									<li><a href="./formacion/curso-wordpress-en-valencia.html">Curso Wordpress</a></li>
									<li><a href="./formacion/curso-posicionamiento-seo-en-valencia.html">Curso Posicionamiento SEO</a></li>
									<li><a href="./formacion/curso-prestashop-en-valencia.html">Curso Prestashop</a></li>
									<li><a href="./formacion/curso-posicionamiento-sem-en-valencia.html">Curso Posicionamiento SEM</a></li>
									<li><a href="./formacion/curso-redes-sociales-en-valencia.html">Curso de Redes sociales</a></li>
								</ul>
							</li>
							<li><a href="./proximas-fechas.html">Proximas fechas</a></li>
							<li><a href="./noticias.php">Noticias</a></li>
							<li><a href="./contacto.html">Contacto</a></li>
						</ul>
					</nav>

			</header>

			
			<?php
			if (!empty($_POST["email"]) && !empty($_POST["mensaje"])) {
				if(empty($_POST["nombre"]))
					$nombre = "Alguien anonimo";
				else 
					$nombre = $_POST["nombre"];
				//mensaje
				$mensaje1 = "$nombre ha enviado una consulta.<br>";
				$mensaje1 .= "Su correo es " . $_POST["email"];
				
				//parametros
				$path = './includes/plantilla.html';
				$tpl = file_get_contents($path);
				$body = str_replace('mensaje111', $mensaje1, $tpl);
				$mensaje2 = $_POST['mensaje'];
				$mensaje2 .= "<br>";
				$body = str_replace('mensaje222', $mensaje2, $body);
				$body = str_replace('titulito1234', 'Su mensaje ha sido el siguiente:', $body);

				$idCorreo = rand (10000 , 99999);
				$headers  = "From: MandarinaWebs id/$idCorreo@mandarinawebs.com\r\n";
				$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
				$headers .= "Return-Path: info@mandarinawebs.com\r\n";
				$headers .= "Cc: info@mandarinawebs.com\r\n";
				$headers .= "Content-Type: text/html";

				$receptor = "info@mandarinawebs.com";
				$emisor = "mandarinaWebs.com_id/";
				$emisor .= rand (10000 , 99999);
				if(mail($receptor, "¡Nuevo mensaje de Cursos Mandarinawebs!", $body, $headers))
					$respuesta = "	<header>
										<h1><span class='icon fa-check'></span> Correo enviado</h1>
										<p>¡Perfecto! Ya tenemos tu correo en nuestro buzón. Intenaremos responderte antes de 24 horas.</p>
									</header>";
				else $respuesta = "<header>
									<h1>
										<span class='icon fa-times'></span>
										Correo no enviado :(
									</h1>
									<p>	Algo ha ido mal, por favor vuelve a intentarlo más tarde</p>
									</header>";
			} else{
				$respuesta = "<header>
									<h1>
										<span class='icon fa-times'></span>
										Correo no enviado :(
									</h1>
									<p>	Parece que no has completado todos los campos
										que hacen falta para enviar el correo.
										Solo tienes que poner tu correo y un mensaje,
										incluso el nombre es opcional. Así de sencillo.</p>
									</header>";
			}
			?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<?php echo $respuesta; ?>
					<ul class="actions">
						<li><a href="./noticias.php" class="button primary">Úiltimas noticias</a></li>
					</ul>
				</div>
			</section>

		<!-- Footer -->
			<section class="wrapper style1 special">
				<p>&copy; Mandarinawebs | Todos los derechos reservados. <a href="https://mandarinawebs.com/politica-de-cookies.html"> Política de cookies </a></p>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.selectorr.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>