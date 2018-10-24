<?php

	//Miramos si hay que poner algún comentario
	if(isset($_POST['nombre']) && isset($_POST['contenido'])) {
		if (empty($_POST['nombre']) or empty($_POST['contenido'])) {
			$error = "Todos los campos son obligatorios";
		} else {
			$query = $pdo->prepare('INSERT INTO comentarios (autor, fecha, contenido, articulo) VALUES (?, ?, ?, ?)');
			$query->bindValue(1, $_POST['nombre']);
			$query->bindValue(2, time());
			$query->bindValue(3, nl2br ($_POST['contenido']));
			$query->bindValue(4, $id );
			$query->execute();
		}
	}
	
	//Leemos comentarios
	$query = $pdo->prepare("SELECT * FROM comentarios WHERE articulo = ?");
	$query->bindValue(1, $id );
	$query->execute();

	$comentarios = $query->fetchAll();	
?>
	
	<?php 
		foreach($comentarios as $comentario) {
			$fechaComentario = $comentario['fecha'];
			$fecha = $dias[date('w', $fechaComentario)]." ".date('d', $fechaComentario)." de ".$meses[date('n', $fechaComentario)-1]. " del ".date('Y', $fechaComentario);
	?>
		<h4></h4>
		<p>
			<font size="6"><?php echo $comentario['autor']; ?></font><i> El <?php echo $fecha; ?></i><br />
			<font size="5"><blockquote><?php echo $comentario['contenido']; ?></blockquote></font> <br />
		</p>
		
	
	<?php } ?>
	
	<form action="<?php echo $url . ".php"; ?>" method="post" autocomplete="off">
		<input type="text" name="nombre" placeholder="Nombre" value=""/><br />
		<textarea rows="3" cols="50" placeholder="Comentario" name="contenido"></textarea><br /><br />
		<input type="submit" class="button primary fit" value="COMENTAR"><br /><br />
	</form>