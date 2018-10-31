<!DOCTYPE html>

<?php include_once('./includes/modulos/firma.php'); ?>
<html lang="es">
	<head>
		<?php include_once('./includes/modulos/head-home.php'); ?>
	</head>

	<body>
		<?php include_once('./includes/modulos/cabecera-basic.php'); ?>
		<!-- INSERTE CONTENIDO AQUÍ -->
		<section id="main" class="wrapper">
			<div class="inner">
				<header>
					<h1>Contacto</h1>
					<p>¿Alguna duda? Somos expertos en solucionarlas...</p>
				</header>
				<div class="inner">
					<div class="split style1">
						<div class="contact">
							<h2>Contacto</h2>
							<ul class="contact-icons">
								<li class="icon fa-home"><a href="#">Carrer Tres Forques, Nº6<br>Valencia (España)</a></li>
								<li class="icon fa-phone"><a href="#">644 758 976</a></li>
								<li class="icon fa-envelope-o"><a href="#">formacion@mandarinawebs.com</a></li>
							</ul>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3080.218284571084!2d-0.39135934925282245!3d39.46439712082705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f3f4d972c93%3A0xfdfa84dc244bdcb0!2sAv.+Tres+Forques%2C+6%2C+46018+Valencia!5e0!3m2!1ses!2ses!4v1539765089463" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
							<p style="font-size:11px;">
								Para cumplir con la nueva Ley de Protección de Datos y que tus datos estén a salvo, debes leer y aceptar nuestra política de privacidad:
								Responsable: Diego Montagud Rodríguez a nombre de Cursos de Mandarina Webs | Finalidad: La finalidad de la recogida y tratamiento de los datos personales se debe a gestionar el alta en la suscripción ya indicada | Legitimación: Al marcar la casilla de aceptación, estás dando tu legítimo consentimiento para que tus datos sean tratados conforme a las finalidades de este formulario y por las personas y/o proveedores que se indican a continuación | Destinatarios: Debido al uso de servicios de terceros, tus datos serán guardados en los servidores de Google (Google, Inc), Webempresa (Webempresa S.L) | Derechos: Tienes derecho a acceder, rectificar, limitar y suprimir tus datos. Para ello contacta con info@mandarinawebs.com</br>
							</p>
								<div>
									</br>
									<input type="checkbox" id="aceptacondicion" name="aceptacondicion" onclick="acepta()">
									<label for="aceptacondicion">Acepta las condiciones de uso</label>
								</div>
								<ul class="actions">
									<li></br><input id="enviar" name="enviar" type="submit" value="Enviar" disabled/></li>
								</ul>
								<h4>Las secciones marcadas con "*" son obligatorias</h4>
							</form>
						</div>
				</div>
			</div>
		</section>
		
		<?php include_once('./includes/modulos/scripts-home.php'); ?>
		<?php include_once('./includes/modulos/footer.php'); ?>
	</body>
</html>