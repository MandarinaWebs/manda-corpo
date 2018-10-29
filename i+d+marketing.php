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
			    <div class="top-side">
			      <h4 class="title">MY WORKS</h4>
			      <h2>PORTFOLIO</h2>
			    </div>
			    
			    <div class="row gtr-uniform">
			    	<div class="col-3 col-12-small">
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
					<div class="col-9 col-12-small">
					    <div class="filters block">
					      <ul>
					        <li class="active" data-filter="*">All</li>
					        <li data-filter=".corporate">Corporate</li>
					        <li data-filter=".personal">Personal</li>
					        <li data-filter=".agency">Agency</li>
					        <li data-filter=".portal">Portal</li>
					      </ul>
					    </div>
					</div>
				</div>


			    <div class="filters-content">
			      <div class="row grid gtr-uniform">
			        <div class="col-4 col-12-small all corporate">
			          <div class="item">
			            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
			            <div class="p-inner">
			              <h5>WORK 1</h5>
			              <div class="cat">Hola mi cara mi cara mi cara mi cara mi cara mi cara mi cara mi cara </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-4 col-12-small all personal">
			          <div class="item">
			            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
			            <div class="p-inner">
			              <h5>Work 1</h5>
			              <div class="cat">Hola mi cara mi cara mi cara mi cara mi cara mi cara mi cara mi cara </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-4 col-12-small all agency">
			          <div class="item">
			            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
			            <div class="p-inner">
			              <h5>Work 1</h5>
			              <div class="cat">Hola mi cara mi cara mi cara mi cara mi cara mi cara mi cara mi cara </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-4 col-12-small all portal">
			          <div class="item">
			            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
			            <div class="p-inner">
			              <h5>Work 1</h5>
			              <div class="cat">Hola mi cara mi cara mi cara mi cara mi cara mi cara mi cara mi cara </div>
			            </div>
			          </div>
			        </div>
			         <div class="col-4 col-12-small all corporate">
			          <div class="item">
			            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
			            <div class="p-inner">
			              <h5>Work 1</h5>
			              <div class="cat">Hola mi cara mi cara mi cara mi cara mi cara mi cara mi cara mi cara </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-4 col-12-small all personal corporate">
			          <div class="item">
			            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
			            <div class="p-inner">
			              <h5>Work 3</h5>
			              <div class="cat">Hola mi cara mi cara mi cara mi cara mi cara mi cara mi cara mi cara </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-4 col-12-small all agency">
			          <div class="item">
			            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
			            <div class="p-inner">
			              <h5>Work 1</h5>
			              <div class="cat">Hola mi cara mi cara mi cara mi cara mi cara mi cara mi cara mi cara </div>
			            </div>
			          </div>
			        </div>
			        <div class="col-4 col-12-small all portal">
			          <div class="item">
			            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
			            <div class="p-inner">
			              <h5>Work 1</h5>
			              <div class="cat">Hola mi cara mi cara mi cara mi cara mi cara mi cara mi cara mi cara </div>
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
