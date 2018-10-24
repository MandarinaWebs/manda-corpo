<!-- USUARIO-->
<?php
	include_once('./includes/user.php');
	
	$user = new User();
	$datos_user = $user->fecth_data($_GET['autor']);
	$fotoTitulo = $datos_user['fotoURL'];
?>
	<section  class="wrapper style3">
		<div class="container-blog">
			<div class="row">
				<div class="6u 12u$(small)">
					<div align="center">
						<div class="circle-container">
							<?php 
								$tiempo = time();
								if(isset($fotoTitulo)) echo '<img class="circle-img" src="./admin/images/fotoUser/' .$fotoTitulo . '?time='.$tiempo.'">' 
							?>
						</div>
					</div>
				</div>
				<div class="6u 12u$(small) margin-movil">
					<h2>
						<?php echo $datos_user['user_name']; ?><br />
						<?php echo $datos_user['apellido']; ?>
					</h2>
					
					<p><?php echo $datos_user['descripcion']; ?></p>
					<h3><?php echo $datos_user['articulos_publicados']; ?> Artículos publicados</h3>
				</div>
			</div>
		</div>
	</section>