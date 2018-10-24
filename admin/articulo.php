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
	<head>
		<title>{{{articulo_titulo}}} · Cursos Mandarina Webs</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<meta name="author" content="Mandarina Webs">
		<meta name="description" content="{{{articulo_metaDescription}}}">
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
									<li><a href="./formacion/curso-posicionamiento-seo-en-valencia.html">Curso SEO</a></li>
									<li><a href="./formacion/curso-prestashop-en-valencia.html">Prestashop</a></li>
									<li><a href="./formacion/curso-posicionamiento-sem-en-valencia.html">SEM</a></li>
									<li><a href="./formacion/curso-redes-sociales-en-valencia.html">Redes sociales</a></li>
								</ul>
							</li>
							<li><a href="./proximas-fechas.html">Proximas fechas</a></li>
							<li><a href="./noticias.html">Noticias</a></li>
							<li><a href="./contacto.html">Contacto</a></li>
						</ul>
					</nav>

			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">

					<header>
						<h1>{{{articulo_titulo}}}</h1>
						<p><?php $fechaArticulo = $data['article_timestamp'];
										echo $dias[date('w', $fechaArticulo)]." ".date('d', $fechaArticulo)." de ".$meses[date('n', $fechaArticulo)-1]. " del ".date('Y', $fechaArticulo);
										?></p>
					</header>
					<?php 
						if($mostrarFoto && $foto!="noPhoto.jpg"){
							echo '<a href="#" class="image main"><img width="100%" src="./admin/images/imagenesPosts/'.$foto.'" alt="" /></a>';
							}
						?>

					<div class="contenidoArticulo">
						{{{articulo_contenido}}}
					</div>
					<!-- CMS Etiquetas -->			
					<?php
					if($data['etiquetas'] != "") {
						$etiquetas = explode(" ||| ", $data['etiquetas']);
						foreach($etiquetas as $etiqueta) {
						?>
					<a href="./noticias.php?etiqueta=<?php echo $etiqueta; ?>" class="button small"> &nbsp <?php echo $etiqueta; ?> &nbsp </a>
				<?php 
						} 
					}
				?>
				</div>
				<br/>
				<!-- CMS Comentarios -->	
				<div class="inner"  align="center">
					<div style="max-width: 500px;">
					<h2 align="center">COMENTARIOS</h2>
					<!-- CMS Comentarios -->
					<?php include_once('./includes/comentarios.php'); ?>
				</div></div>
			</section>
			

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="split style1">
						<div class="contact">
							<h2>Contacto</h2>
							<ul class="contact-icons">
								<li class="icon fa-home"><a href="#">Carrer Tres Forques, Nº6<br>Valencia (España)</a></li>
								<li class="icon fa-phone"><a href="#">644 758 976</a></li>
								<li class="icon fa-envelope-o"><a href="#">formacion@mandarinawebs.com</a></li>
							</ul>
							<ul class="icons-bordered">
								<li><a class="icon fa-facebook" href="https://www.facebook.com/mandarinawebsvalencia/">
									<span class="label">Facebook</span>
								</a></li>
								<li><a class="icon fa-twitter" href="https://twitter.com/mandarinawebs">
									<span class="label">Twitter</span>
								</a></li>
								<li><a class="icon fa-instagram" href="https://www.instagram.com/mandarinawebs/">
									<span class="label">Instagram</span>
								</a></li>
								<li><a class="icon fa-linkedin" href="https://www.linkedin.com/company/mandarinawebs/">
									<span class="label">LinkedIn</span>
								</a></li>
							</ul>
						</div>
						<form action="./correo.php" method="post">
							<h2>Escríbenos</h2>
							<div class="fields">
								<div class="field half">
									<input name="nombre" id="nombre" placeholder="Nombre" type="text" />
								</div>
								<div class="field half">
									<input name="email" id="email" placeholder="Email" type="email" />
								</div>
								<div class="field">
									<textarea name="mensaje" id="mensaje" rows="6" placeholder="Mensaje"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><input value="Enviar" class="button" type="submit" /></li>
							</ul>
						</form>
					</div>
					<div class="copyright">
						<p>&copy; Mandarinawebs | Todos los derechos reservados. <a href="https://mandarinawebs.com/politica-de-cookies.html"> Política de cookies </a></p>
					</div>
				</div>
			</footer>

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