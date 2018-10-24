<?php
	if(isset($_GET["autor"]))
		include_once('./includes/seccion_usuario.php');
	
		echo '<div class="container-blog">
			<header align = "center">'; 

		if($feedback == "")
			echo "<h2></h2><p></p>";
		else 
			echo "<h2>" . $feedback . "</h2>";
				
				
				
			echo '</header>
			<div class="container-blog">';

			if(isset($articles[0])) 
				include_once('includes/listado.php'); 
			else 
				echo "<h2>Vaya, parece que aun no se ha escrito nada sobre esto... :(</h2>";
			echo '</div>
		</div>';
?>
			