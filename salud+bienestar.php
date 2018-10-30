<!DOCTYPE html>

<?php include_once('./includes/modulos/firma.php'); ?>
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
			    <h2>DEPORTE, SALUD Y BIENESTAR</h2>
				<div class="row gtr-uniform">
					<div class="col-12 col-12-small">
						<div class="filters block">
							  <ul>
								<li data-filter=".all"><a class="bttn">Todos</a></li>
								<li data-filter=".educacion"><a class="bttn">Recomendados</a></li>
								<li data-filter=".educacion"><a class="bttn">Centros Educativos</a></li>
								<li data-filter=".aguas"><a class="bttn">Aguas</a></li>
								<li data-filter=".bebidas"><a class="bttn">Bebidas energéticas</a></li>
								<li data-filter=".medicina"><a class="bttn">Medicina Natural</a></li>
							  </ul>
						  </div>
						 <div class="dropdown filters lista" style="text-align: left;">
							<button class="button" type="button" data-toggle="dropdown"><font size="5">Todos los productos</font>
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
							  <input class="form-control" id="myInput" type="text" placeholder="¿Qué estás buscando?...">
								<li class="categoria-text" data-filter=".educacion">CENTROS EDUCATIVOS</li>
								<li data-filter=".uniformidadE">Uniformidad Escolar</li>
								<li data-filter=".uniformidadD">Uniformidad Deportiva</li>
								<li data-filter=".materialDeportivo">Material deportivo</li>
								<li data-filter=".obraCivil">Instalaciones y Obra Civil</li>
								<li data-filter=".mantenimientos">Mantenimientos</li>
								<li data-filter=".comedor">Comedor Escolar</li>
								<li class="categoria-text" data-filter=".aguas">AGUAS</li>
								<li data-filter=".iberoagua">Iberoaua</li>
								<li data-filter=".carrizal">Carrizal</li>
								<li class="categoria-text" data-filter=".bebidas">Bebidas energéticas</li>
								<li data-filter=".bMalta">Bebidas de Malta (sin Alcohol)</li>
								<li data-filter=".bDeportivas">Bebidas Deportivas Isotónicas</li>
								<li data-filter=".bEnergeticas">Bebidas Energéticas</li>
								<li data-filter=".bNaturales">Bebidas Naturales Energía</li>
								<li data-filter=".bNoGas">Bebidas Sin Gas</li>
								<li class="categoria-text" data-filter=".medicina">Medicina Natural</li>
								<li data-filter=".complementos">Complementos Nutricionales Célula Madre</li>
								<li data-filter=".corporal">Cuidado Corporal</li>
								<li data-filter=".energeticos">Energéticos</li>
								<li data-filter=".refrescantes">Hidratantes y Refrescantes</li>
								<li data-filter=".nutricionS">Nutrición Saludable</li>
								<li data-filter=".vitMin">Vitaminas y Minerales</li>
							</ul>
						  </div>
						  
					  </div>
					<div class="col-9 col-12-small">
						
					</div>
				</div>
				<div class="filters-content">
				  <div class="row grid gtr-uniform">
					<div class="col-4 col-12-small all uniformidadE educacion todos">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/uniforme-escolar.jpg" alt="">
						<div class="p-inner">
						  <h5>Uniformes Escolares</h5>
						  <div class="cat">Uniforme escolar de todo tipo para colegios y texto de ejemplo, texto de ejemplo</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos uniformidadD educacion">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/uniforme-deportivo.jpg" alt="">
						<div class="p-inner">
						  <h5>Uniformes Deportivos</h5>
						  <div class="cat">Uniformes de deporte de todo tipo para colegios  y texto de ejemplo, texto de ejemplo</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos materialDeportivo educacion">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/material-deportivo.jpg" alt="">
						<div class="p-inner">
						  <h5>Material Deportivo</h5>
						  <div class="cat">Todo tipo de material para el deporte  y texto de ejemplo, texto de ejemplo</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos obraCivil educacion">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/intalaciones.jpg" alt="">
						<div class="p-inner">
						  <h5>Instalaciones y Obra Civil</h5>
						  <div class="cat">Instalaciones orientadas a la educación en centros formativos</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all mantenimientos educacion">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/mantenimiento.jpg" alt="">
						<div class="p-inner">
						  <h5>Mantenimiento</h5>
						  <div class="cat">Mantenimiento realizado por profesionales en el sector</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all comedor educacion">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/comedor-escolar.jpg" alt="">
						<div class="p-inner">
						  <h5>Comedor escolar</h5>
						  <div class="cat">Dirigido a centros educativos con comedor  y texto de ejemplo, texto de ejemplo</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos aguas iberoagua">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/iberoagua.jpg" alt="">
						<div class="p-inner">
						  <h5>Iberoagua</h5>
						  <div class="cat">Iberoagua para la salud y el bienestar  y texto de ejemplo, texto de ejemplo</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos aguas carrizal">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/carrizal.jpg" alt="">
						<div class="p-inner">
						  <h5>Carrizal</h5>
						  <div class="cat">Carrizal de Calidad y realizado por grandes profesionales</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos bebidas bMalta">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/cerveza-sin.jpg" alt="">
						<div class="p-inner">
						  <h5>Bebidas de Malta sin alcohol</h5>
						  <div class="cat">Bebidas  con malta artesanales sin alcohol  y texto de ejemplo, texto de ejemplo</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos bebidas bDeportivas">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/isotonica.jpg" alt="">
						<div class="p-inner">
						  <h5>Bebidas Deportivas Isotónicas</h5>
						  <div class="cat">Bebidas isotónicas para deportistas de alto rendimiento</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos bebidas bEnergeticas">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/bebida-energetica.jpg" alt="">
						<div class="p-inner">
						  <h5>Bebidas Energéticas</h5>
						  <div class="cat">Refrescos energéticos con el objetivo de aumentar el rendimiento</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all bebidas bNaturales">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/bebida-natural.jpg" alt="">
						<div class="p-inner">
						  <h5>Bebidas Naturales Energía</h5>
						  <div class="cat">
							Bebidas de origen natural con un aporte energético extra y texto de ejemplo,
						  </div>
						</div>
					   </div>
					</div>
					<div class="col-4 col-12-small all bebidas bNoGas">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/bebida-sin-gas.jpg" alt="">
						<div class="p-inner">
						  <h5>Bebidas Sin Gas</h5>
						  <div class="cat">Todo tipo de refrescos sin gas y sin aditivos, totalmente naturales</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos medicina complementos">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/complementos.jpg" alt="">
						<div class="p-inner">
						  <h5>Complementos Nutricionales CM</h5>
						  <div class="cat">Complementos para la nutrición realizados exclusivamente con células madre</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos medicina corporal">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/cuidado-corporal.jpg" alt="">
						<div class="p-inner">
						  <h5>Cuidado Corporal</h5>
						  <div class="cat">Todo lo necesario para un correcto cuidado de tu cuerpo</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all todos medicina energéticos">
					<div class="item">
						<img src="./images/sectores/salud-bienestar/energeticos.jpg" alt="">
						<div class="p-inner">
							<h5>Energéticos</h5>
							<div class="cat">Energéticos de todo tipo para que nunca te falten fuerzas</div>
						</div>
					   </div>
					</div>
					<div class="col-4 col-12-small all todos medicina refrescantes">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/hidratante-refrescante.jpg" alt="">
						<div class="p-inner">
						  <h5>Hidratantes y Refrescantes</h5>
						  <div class="cat">Hidratantes y Refrescantes para tu salud y poder estar totalmente joven</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all medicina nutricionS">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/nutricion.jpg" alt="">
						<div class="p-inner">
						  <h5>Nutrición Saludable</h5>
						  <div class="cat">Nutricion controlada y saludable por los mejores dietistas</div>
						</div>
					  </div>
					</div>
					<div class="col-4 col-12-small all medicina vitMin">
					  <div class="item">
						<img src="./images/sectores/salud-bienestar/vitaminas.jpg" alt="">
						<div class="p-inner">
						  <h5>Vitaminas y Minerales</h5>
						  <div class="cat">Vitaminas y minerales como suplemento para una dieta totalmente equilibrada</div>
						</div>
					  </div>
					</div>
					
				</div>
			</div>
		</section>
		<section class="wrapper" style="padding-bottom:0px;">
			<div class="inner">
				<h2>¿Te podemos ayudar en algo más?</h2>
			</div>
		</section>
		<?php include_once('./includes/modulos/secciones.php'); ?>
		<?php include_once('./includes/modulos/scripts-home.php'); ?>
		<?php include_once('./includes/modulos/footer.php'); ?>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src='https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js'></script>
		<script  src="assets/js/indexFiltro.js"></script>
	</body>
</html>
