	<?php 
		foreach($articles as $article) {
	?>
		<div class="row" style="margin-top:50px;">
			<?php 
				$foto = $article['foto'];
				$urlFoto = './admin/images/imagenesPosts/' .$foto . '?' . time();
			?>
			<div class="col-6 col-12-medium" style="padding: 20px" >
				<div align="center">
					<div class="foto-blog-container">
						<img class="img-overflow" style="border-radius:10px;" src="<?php echo $urlFoto; ?>" alt="" />
					</div>
				</div>
			</div>
			<div class="col-6 col-12-medium" style="padding: 20px" >
				<i>
					<?php 
						$fechaArticulo = $article['article_timestamp'];
						echo $dias[date('w', $fechaArticulo)]." ".date('d', $fechaArticulo)." de ".$meses[date('n', $fechaArticulo)-1]. " del ".date('Y', $fechaArticulo);
					?>
				</i>
				<h2><a href="<?php echo $article['url'] . ".php" ?>">
					<?php echo $article['article_title'] ?>
				</a></h2>
				<p>
					 <?php echo recorta_string($article['article_content']); ?> 
				</p>
				<div class="3u 12u$(medium)">
					<ul class="actions stacked">
						<li><a href="<?php echo $article['url'] . ".php" ?>" class="button">Leer más</a></li>
					</ul>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php 
	//hacemos todas las operaciones si hay más de una página
	if(ceil($articles[0]['count'] /10) > 1) { 
	?>
	
	<div align="center" style="margin-top:50px">
			<input type="hidden" name="pagina_cambio" id="pagina_cambio" value="2">
				<footer class="major">
					<ul class="pagination">
					<?php
						$articulo_count = $articles[0]['count'];
						//Preparamos el nuevo link
						$url_nueva = "blog.php";
						if($busqueda_actual != "") {
							$url_nueva .= $busqueda_actual . "&";
						} else {
							$url_nueva .= "?";
						}
						
						//Habrán 10 por página así que divimos entre 10 y redondeamos hacia arriba. 13 = 2 páginas
						$paginas = ceil($articulo_count/10);
						$i = 1;
						//Por cada página ponemos un link
						
						while ($i <= $paginas) {
							if($i == $pagina)
								echo '<li><a href="#" class="page active">'.$i.'</a></li>';
							else {
								?>
									<li><a class="page" href="<?php echo $url_nueva . "pagina=" . $i; ?>"><?php echo $i; ?></a></li>
								<?php 
							}
							$i++;
						} 
					?>
					</ul>
				</footer>
	</div>
	<?php } ?>
	
