<!DOCTYPE html>

<?php include_once('./includes/modulos/firma.php'); 
	$_SESSION['pagina'] = "i+d+marketing";
	?>
HOLA1
<html lang="es">
	<head>
		<?php include_once('./includes/modulos/head-home.php'); ?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<?php include_once('./includes/modulos/cabecera-basic.php'); ?>
		<!-- INSERTE CONTENIDO AQUÍ -->
		<section class="wrapper portfolio section" style="padding-bottom:0px;">
			<div class="inner">
			    <div class="top-side">
			      <h2>I+D+MARKETING</h2>
			    </div>
			    
			    <div class="row gtr-uniform">
			    	<div class="col-12 col-12-small">
						 <div class="dropdown filters lista">
							<button class="button" type="button" data-toggle="dropdown"><font size="5">Todos los productos</font>
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
							  <input class="form-control" id="myInput" type="text" placeholder="¿Qué estás buscando?...">
								<li class="categoria-text" data-filter=".agenciaPublicidad">AGENCIA PUBLICITARIA</li>
								<li data-filter=".campañaPublicitaria">Campaña publicitaria</li>
								<li data-filter=".marketingOnline">Marketing Online</li>
								<li data-filter=".publicidadGrafica">Publicidad Gráfica</li>
								<li data-filter=".marketingDirecto">Marketing Directo</li>
								<li class="categoria-text" data-filter=".fotografia">FOTOGRAFÍA</li>
								<li data-filter=".bookfotografico">Book fotográfico</li>
								<li data-filter=".fotografiaPublicitaria">Fotografía publicitaria</li>
								<li data-filter=".solucionesEdicion">Soluciónes Edición</li>
								<li class="categoria-text" data-filter=".imagenCorporativa">IMAGEN CORPORATIVA</li>
								<li data-filter=".diseñoCorporativo">Diseño Corporativo</li>
								<li data-filter=".diseñoFolletos">Diseño de folletos</li>
								<li data-filter=".diseñoLogotipos">Diseño de logotipos</li>
								<li data-filter=".diseñoTarjetas">Diseño de tarjetas</li>
								<li class="categoria-text" data-filter=".web">WEB</li>
								<li data-filter=".webCorporativa">Web corporativa</li>
								<li data-filter=".tiendaVirtual">Tienda Virtual</li>
								<li data-filter=".webInstitucionales">Web institucionales</li>
								<li data-filter=".catalogoVirtual">Catálogo Virtual</li>
								<li class="categoria-text" data-filter=".eventos">EVENTOS</li>
								<li data-filter=".equiposAudiovisuales">Equipos audiovisuales</li>
								<li data-filter=".montajeEscenarios">Montaje de escenarios</li>
								<li data-filter=".asesoramientoTecnico">Asesoramiento técnico</li>
								<li data-filter=".organizacionEventos">Organización de eventos</li>
								<li class="categoria-text" data-filter=".publicidad">PUBLICIDAD</li>
								<li data-filter=".articulosOficina">Articulos de oficina personalizados</li>
								<li data-filter=".articulosFitness">Articulos Fitness</li>
								<li data-filter=".gorrasPersonalizables">Gorras personalizables</li>
							</ul>
						  </div>
					</div>

					<div class="col-12 col-12-small">
					    <div class="filters block">
					      <ul>
					      	<li class="active" data-filter=".todos">Destacados</li>
					        <li data-filter="*">Todos</li>
					        <li data-filter=".agenciaPublicidad">Agencia Publicidad</li>
					        <li data-filter=".fotografia">Fotografía</li>
					        <li data-filter=".imagenCorporativa">Imagen Corporativa</li>
					        <li data-filter=".web">Web</li>
					        <li data-filter=".eventos">Eventos</li>
					        <li data-filter=".publicidad">Publicidad</li>
					      </ul>
					    </div>
					</div>
				</div>


			    <div class="filters-content">
			      <div class="row grid gtr-uniform">
			        <div class="col-4 col-12-small all todos agenciaPublicidad campañaPublicitaria">
			          <div class="item">
			            <img src="./images/i+d+marketing/campana-publicitaria.jpg">
			            <div class="p-inner">
			              <h5>CAMPAÑA PUBLICITARIA</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor.</div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all todos agenciaPublicidad marketingOnline">
			          <div class="item">
			            <img src="./images/i+d+marketing/marketing-online.jpg" alt="">
			            <div class="p-inner">
			              <h5>Marketing Online</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor.</div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all agenciaPublicidad publicidadGrafica">
			          <div class="item">
			            <img src="./images/i+d+marketing/publicidad-grafica.jpg" alt="">
			            <div class="p-inner">
			              <h5>Publicidad Gráfica</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all agenciaPublicidad marketingDirecto">
			          <div class="item">
			            <img src="./images/i+d+marketing/marketing-directo.jpg" alt="">
			            <div class="p-inner">
			              <h5>Marketing Directo</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor.</div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all todos fotografia bookfotografico">
			          <div class="item">
			            <img src="./images/i+d+marketing/fotografia.jpg" alt="">
			            <div class="p-inner">
			              <h5>Book fotográfico</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all todos fotografia fotografiaPublicitaria">
			          <div class="item">
			            <img src="./images/i+d+marketing/fotografia-publicitaria.jpg" alt="">
			            <div class="p-inner">
			              <h5>Fotografía publicitaria</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all fotografia solucionesEdicion">
			          <div class="item">
			            <img src="./images/i+d+marketing/fotografia.jpg" alt="">
			            <div class="p-inner">
			              <h5>Soluciones Edición</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all todos imagenCorporativa diseñoCorporativo">
			          <div class="item">
			            <img src="./images/i+d+marketing/diseno-corporativo.jpg" alt="">
			            <div class="p-inner">
			              <h5>Diseño Corporativo</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all todos imagenCorporativa diseñoFolletos">
			          <div class="item">
			            <img src="./images/i+d+marketing/diseno-folletos.jpg" alt="">
			            <div class="p-inner">
			              <h5>Diseño de folletos</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all imagenCorporativa diseñoLogotipos">
			          <div class="item">
			            <img src="./images/i+d+marketing/diseno-logotipos.jpg" alt="">
			            <div class="p-inner">
			              <h5>Diseño de logotipos</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all todos imagenCorporativa diseñoTarjetas">
			          <div class="item">
			            <img src="./images/i+d+marketing/diseno-tarjetas.jpg" alt="">
			            <div class="p-inner">
			              <h5>Diseño de tarjetas</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all todos web webCorporativa">
			          <div class="item">
			            <img src="./images/i+d+marketing/web-corporativa.jpg" alt="">
			            <div class="p-inner">
			              <h5>Web corporativa</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all todos web tiendaVirtual">
			          <div class="item">
			            <img src="./images/i+d+marketing/tienda-virtual.png" alt="">
			            <div class="p-inner">
			              <h5>Tienda Virtual</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all todos web webInstitucionales">
			          <div class="item">
			            <img src="./images/i+d+marketing/web-institucional.jpg" alt="">
			            <div class="p-inner">
			              <h5>Web Institucionales</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all web catalogoVirtual">
			          <div class="item">
			            <img src="./images/i+d+marketing/catalogo-virtual.jpg" alt="">
			            <div class="p-inner">
			              <h5>Catálogo virtual</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all todos eventos equiposAudiovisuales">
			          <div class="item">
			            <img src="./images/i+d+marketing/equipos-audiovisuales.jpg" alt="">
			            <div class="p-inner">
			              <h5>Equipos audiovisuales</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all eventos montajeEscenarios">
			          <div class="item">
			            <img src="./images/i+d+marketing/montaje-escenarios.jpg" alt="">
			            <div class="p-inner">
			              <h5>Montaje de Escenarios</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all todos eventos asesoramientoTecnico">
			          <div class="item">
			            <img src="./images/i+d+marketing/asesoramiento-tecnico.jpg" alt="">
			            <div class="p-inner">
			              <h5>Asesoramiento técnico</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all todos eventos organizacionEventos">
			          <div class="item">
			            <img src="./images/i+d+marketing/eventos.jpg" alt="">
			            <div class="p-inner">
			              <h5>Organización de eventos</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-4 col-12-small all todos publicidad articulosOficina">
			          <div class="item">
			            <img src="./images/i+d+marketing/articulos-oficina-personalizados.jpg" alt="">
			            <div class="p-inner">
			              <h5>Articulos de oficina Personalizados</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all publicidad articulosFitness">
			          <div class="item">
			            <img src="./images/i+d+marketing/articulos-fitness.jpg" alt="">
			            <div class="p-inner">
			              <h5>Articulos Fitness</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all todos publicidad gorrasPersonalizables">
			          <div class="item">
			            <img src="./images/i+d+marketing/gorras-personalizables.jpg" alt="">
			            <div class="p-inner">
			              <h5>Gorras personalizables</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			</div>
		</section>
		
		<?php include_once('./includes/modulos/scripts-home.php'); ?>
		<?php include_once('./includes/modulos/footer.php'); ?>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src='https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js'></script>
		<script  src="assets/js/indexFiltro.js"></script>
	</body>
</html>
