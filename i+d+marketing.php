<!DOCTYPE html>

<?php include_once('./includes/modulos/firma.php'); 
	$_SESSION['pagina'] = "i+d+marketing";
	?>
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
							  <input class="form-control" id="myInput" type="text" placeholder="Search..">
								<li data-filter=".corporate"><b>Corporate</b> <font class="categoriaMenu">(categoria)</font></li>
								<li data-filter=".personal">Personal</li>
								<li data-filter=".agency">Agency</li>
								<li data-filter=".portal">Portal</li>
							</ul>
						  </div>
					  </div>
					<div class="col-12 col-12-small">
					    <div class="filters block">
					      <ul>
					        <li class="active" data-filter="*">All</li>
					        <li data-filter=".agenciaPublicidad">Agencia Publicidad</li>
					        <li data-filter=".fotografia">Fotografía</li>
					        <li data-filter=".imagen">Imagen Corporativa</li>
					        <li data-filter=".web">Web</li>
					        <li data-filter=".eventos">Eventos</li>
					        <li data-filter=".publicidad">Publicidad</li>
					      </ul>
					    </div>
					</div>
				</div>


			    <div class="filters-content">
			      <div class="row grid gtr-uniform">
			        <div class="col-4 col-12-small all agenciaPublicidad">
			          <div class="item">
			            <img src="./images/i+d+marketing/imagen.jpg">
			            <div class="p-inner">
			              <h5>CAMPAÑA PUBLICITARIA</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor.</div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all agenciaPublicidad">
			          <div class="item">
			            <img src="./images/i+d+marketing/imagen.jpg" alt="">
			            <div class="p-inner">
			              <h5>Marketing Online</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor.</div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all agenciaPublicidad">
			          <div class="item">
			            <img src="./images/i+d+marketing/imagen.jpg" alt="">
			            <div class="p-inner">
			              <h5>Publicidad Gráfica</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all agenciaPublicidad">
			          <div class="item">
			            <img src="./images/i+d+marketing/imagen.jpg" alt="">
			            <div class="p-inner">
			              <h5>Marketing Directo</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor.</div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all fotografia">
			          <div class="item">
			            <img src="./images/i+d+marketing/fotografia.jpg" alt="">
			            <div class="p-inner">
			              <h5>Book fotográfico</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all fotografia">
			          <div class="item">
			            <img src="./images/i+d+marketing/fotografia.jpg" alt="">
			            <div class="p-inner">
			              <h5>Fotografía publicitaria</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all fotografia">
			          <div class="item">
			            <img src="./images/i+d+marketing/fotografia.jpg" alt="">
			            <div class="p-inner">
			              <h5>Soluciones Edición</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all imagen">
			          <div class="item">
			            <img src="./images/i+d+marketing/imagen-1.jpg" alt="">
			            <div class="p-inner">
			              <h5>Diseño Corporativo</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all imagen">
			          <div class="item">
			            <img src="./images/i+d+marketing/imagen-1.jpg" alt="">
			            <div class="p-inner">
			              <h5>Diseño folletos</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all imagen">
			          <div class="item">
			            <img src="./images/i+d+marketing/imagen-1.jpg" alt="">
			            <div class="p-inner">
			              <h5>Diseño logotipos</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all imagen">
			          <div class="item">
			            <img src="./images/i+d+marketing/imagen-1.jpg" alt="">
			            <div class="p-inner">
			              <h5>Diseño Tarjetas</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all web">
			          <div class="item">
			            <img src="./images/i+d+marketing/web.jpg" alt="">
			            <div class="p-inner">
			              <h5>Web corporativa</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all web">
			          <div class="item">
			            <img src="./images/i+d+marketing/web.jpg" alt="">
			            <div class="p-inner">
			              <h5>Tienda Virtual</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all web">
			          <div class="item">
			            <img src="./images/i+d+marketing/web.jpg" alt="">
			            <div class="p-inner">
			              <h5>Web Institucionales</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all web">
			          <div class="item">
			            <img src="./images/i+d+marketing/web.jpg" alt="">
			            <div class="p-inner">
			              <h5>Catálogo virtual</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all eventos">
			          <div class="item">
			            <img src="./images/i+d+marketing/eventos.jpg" alt="">
			            <div class="p-inner">
			              <h5>Equipos audiovisuales</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all eventos">
			          <div class="item">
			            <img src="./images/i+d+marketing/eventos.jpg" alt="">
			            <div class="p-inner">
			              <h5>Montaje de Escenarios</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all eventos">
			          <div class="item">
			            <img src="./images/i+d+marketing/eventos.jpg" alt="">
			            <div class="p-inner">
			              <h5>Asesoramiento técnico</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-4 col-12-small all eventos">
			          <div class="item">
			            <img src="./images/i+d+marketing/eventos-1.jpg" alt="">
			            <div class="p-inner">
			              <h5>Eventos</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>
			        
			        <div class="col-4 col-12-small all publicidad">
			          <div class="item">
			            <img src="./images/i+d+marketing/publicidad.jpg" alt="">
			            <div class="p-inner">
			              <h5>Articulos Oficina Personalizados</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all publicidad">
			          <div class="item">
			            <img src="./images/i+d+marketing/publicidad.jpg" alt="">
			            <div class="p-inner">
			              <h5>Artículos Automovil</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all publicidad">
			          <div class="item">
			            <img src="./images/i+d+marketing/publicidad.jpg" alt="">
			            <div class="p-inner">
			              <h5>Abanicos personalizados</h5>
			              <div class="cat">Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor. </div>
			            </div>
			          </div>
			        </div>

			         <div class="col-4 col-12-small all publicidad">
			          <div class="item">
			            <img src="./images/i+d+marketing/publicidad.jpg" alt="">
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
