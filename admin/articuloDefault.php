<!DOCTYPE HTML>
<?php
	include_once('includes/connection.php');
	include_once('includes/article.php');
	include_once('includes/basics.php');

	$article = new Article();
	
	$path_info =  pathinfo(__FILE__);
	$url = trim($path_info['filename']);
	
	$data = $article->fecth_data($url);
	$id = $data['article_id'];
	$foto = $data['foto'];
	$mostrarFoto = $data['foto_visible'];
	?>
<!--
	Por los artistas de MandarinaWebs
-->
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- CMS titulo página -->
	<title>{{{articulo_titulo}}} · MandarinaWebs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /><!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link href="assets/css/main.css" rel="stylesheet" />
	<link href="images/logo-black.png" rel="shortcut icon" />
	<meta name="description" content="Crea tu página web en dos sencillos pasos. Además diseña tu plan de Marketing Digital.">
	<!-- CMS Etiquetas del articulo -->
	<meta name="keywords" content="{{{articulo_etiquetas}}}">
	<meta name="author" content="Mandarina Webs">
	<meta name="robots" content="noindex,nofollow">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113022194-1"></script><script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-113022194-1');
		</script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav>
					<ul>
						<li><a href="#menu">Menú</a></li>
					</ul>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
			<br>
			<h3>Menú</h3>
			<img src="images/logo-white.png" width="64" height="64" style="margin-bottom=-50;">
				<ul class="links">
					<li><a href="/">Inicio</a></li>
					<li><a href="presupuestos.html">Servicios y Presupuestos</a></li>
					<li><a href="plantillas.html">Modelos</a></li>
					<li><a href="proceso.html">Proceso a seguir</a></li>
					<li><a href="pedido.html">Hacer un pedido</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav>  


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper style1">
						<div class="inner">
							<header class="major">

								<!-- CMS Categoría -->
								<a href="blog.php?categoria=<?php echo $data['categoria']; ?>" class="button special"><?php echo $data['nombre_categoria']; ?></a> <br /><br />

								<!-- CMS Título -->
								<h1>{{{articulo_titulo}}}</h1>

								<!-- CMS Fecha y Autor -->
								<p>
									El <?php $fechaArticulo = $data['article_timestamp'];
										echo $dias[date('w', $fechaArticulo)]." ".date('d', $fechaArticulo)." de ".$meses[date('n', $fechaArticulo)-1]. " del ".date('Y', $fechaArticulo);
										?><br />
									Por: <a href="blog.php?autor=<?php echo $data['usuario']; ?>"><?php echo $data['user_name']; ?></a>
								</p>

								<!-- CMS Foto de portada -->
								<?php 
								if($mostrarFoto && $foto!="noPhoto.jpg"){
									echo '<div align="center"><img width="100%" src="./admin/images/imagenesPosts/'.$foto.'" alt="" /></div>';
									}
								?>

							<section> 
								<!-- CMS Etiquetas -->			
								<?php
									if($data['etiquetas'] != "") {
										$etiquetas = explode(" ||| ", $data['etiquetas']);
										foreach($etiquetas as $etiqueta) {
								?>
										<a href="blog.php?etiqueta=<?php echo $etiqueta; ?>" class="button small"> &nbsp <?php echo $etiqueta; ?> &nbsp </a>
								<?php 
										} 
									}
								?>
										</section>
							</header>

							<!-- CMS Contenido del post -->
							{{{articulo_contenido}}}
					</section>
					<section class="style1 split section-comentarios">
						<div style="max-width: 600px;">
							<h2 align="center">COMENTARIOS</h2>
							<!-- CMS Comentarios -->
							<?php include_once('./includes/comentarios.php'); ?>
						</div>
					</section>
				<!-- Footer -->
				<section id="footer" class="wrapper split style2" style="padding-top: 50px;">
					
					<div align="center">
						 <h3><img src="images/logo-black.png" width="48" height="48" style="margin-right:20px; margin-bottom:-10px">Mandarina Webs<h3>
					</div>
					<br>
					<div class="inner">
						<section>
							<header>
								<h3>Cualquier duda</h3>
							</header>
							<p>
							Si tiene cualquier pregunta no dude en contactarnos. Le responderemos en menos de 24 horas. 
							También puede indicarnos si desea contratar alguno de nuestros
							servicios <a href="./contacto.html">haciendo clic aquí</a>. 
							</p>

							<header>
								<h3>Trabaja con nosotros</h3>
							</header>
							<p>
							Si estas interesado en trabajar con Mandarina Webs, no lo dudes. Estamos buscando a gente como tú para formar parte de nuestro equipo. Infórmate de nuestra oferta <a href="./trabaja-con-nosotros.html">aquí</a>.
							</p>
							
							<ul class="icons">
								<li><a href="https://www.facebook.com/mandarinawebsvalencia/" class="icon fa-facebook"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.instagram.com/mandarinawebs" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="tel:672799929" class="icon fa-phone"><span class="label">Snapchat</span></a></li>
								<li><a href="https://www.linkedin.com/company/mandarinawebs/" class="icon fa-linkedin"><span class="label">GitHub</span></a></li>
							</ul>
						</section>
						<section>
							<form method="post" action="./correo.php">
								<div class="field half first"><input type="text" name="nombre" id="nombre" placeholder="Nombre" /></div>
								<div class="field half"><input type="email" name="email" id="email" placeholder="Email" /></div>
								<div class="field"><textarea name="mensaje" id="mensaje" placeholder="Mensaje" rows="4"></textarea></div>
								<div class="field">
									<input type="checkbox" id="aceptar" name="aceptar" onclick="acepta()">
									<label for="aceptar">Acepto la <a href="./politica-de-cookies.html">política de privacidad</a></label>
								</div>
								<ul class="actions">
									<li><input disabled name="enviar" id="enviar" type="submit" value="Enviar" /></li>
								</ul>
							</form>
							<p align="justify" style=" line-height: 0.8em;"><font size="1">Para cumplir con la nueva Ley de Protección de Datos y que tus datos estén a salvo, debes leer y aceptar nuestra política de privacidad: <br> 
							 <b>Responsable:</b> Diego Montagud
							| <b>Finalidad:</b> responder al mensaje que nos envíes a través de este formulario
							| <b>Legitimación:</b> tu consentimiento de que quieres comunicarte con nosotros
							| <b>Destinatarios:</b> Tus datos serán guardados en los servidores de WebEmpresa (nuestro proveedor de hosting) y Google (nuestro porveedor email).
							| <b>Derechos:</b> Tienes derecho a acceder, rectificar, limitar y suprimir tus datos.</font></p>
						</section>
					</div>
					<div class="copyright">
						<p>&copy; Todos los derechos reservados. Al navegar por nuestra página web acepta 
						nuestra <a href="/politica-de-cookies.html" target="_blank" rel="nofollow noopener">política de Cookies</a></p>
					</div>
				</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>