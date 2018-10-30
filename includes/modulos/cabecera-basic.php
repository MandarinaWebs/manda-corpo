<!-- Header -->

<?php if ($_SESSION['pagina'] == "i+d+marketing") { ?>
	<header id="header" style="background: #633e76;">
	 <?php } else{ ?> <header id="header">  <?php } ?>
		
	<!-- Logo -->
		<div class="logo">
			<a href="index.html">Corporeco</a>
		</div>

	<!-- Nav -->
		<nav id="nav">
			<ul>
				<li><a href="./">Inicio</a></li>
				<li><a href="./quienes-somos.php">Quiénes somos</a></li>
				<li>
					<a class="icon fa-angle-down">Categorías</a>
					<ul>
						<li><a href="">I+D y Marketing</a>
							<ul>
								<li><a href="./">Subcategoría</a></li>
								<li><a href="./">Otra Subcategoría por aquí</a></li>
								<li><a href="./">Esta es otra</a></li>
								<li><a href="./">Una más</a></li>
								<li><a href="./">Esta es otra</a></li>
								<li><a href="./">Hacer clic aquí</a></li>
								<li><a href="./">Una más</a></li>
								<li><a href="./">Esta es otra</a></li>
							</ul>
						</li>
						<li><a href="./">Salud y Bienestar</a>
							<ul>
								<li><a href="./">Una más</a></li>
								<li><a href="./">Esta es otra</a></li>
								<li><a href="./">Otra Subcategoría por aquí</a></li>
								<li><a href="./">Subcategoría</a></li>
								<li><a href="./">Esta es otra</a></li>
							</ul>
						</li>
						<li><a href="./">Asesoramientos Globales</a></li>
						<li><a href="./">Ahorro de Costes</a></li>
						<li><a href="./">Hostelería</a>
						</li>
					</ul>
				</li>
					<!-- <li><a href="./proximas-fechas.html">Proximas fechas</a></li>-->
				<li><a href="./noticias.php">Noticias</a></li>
				<li><a href="https://desarrollo.mandarinaservices.com">Shop</a></li>
				<li><a href="./contacto.html">Contacto</a>
					<ul>
						<li><a href="./faq.php">¿Tienes una pregunta?</a></li>
						<li><a href="./">Contacto</a></li>
					</ul>
				</li>
			</ul>
		</nav>

</header>