<?php
	
	$article = new Article();
	
	if(!isset($_GET["pagina"]) || $_GET["pagina"] == "")
		$pagina = 1;
	else 
		$pagina = $_GET["pagina"];

	if(isset($_GET["autor"])) {
		$articles = $article->fecth_all_public("WHERE usuario = " . $_GET["autor"] . " AND borrador = 0", $pagina);
		$busqueda_actual = "?autor=" . $_GET["autor"];
		$feedback = "";
	}
	else if(isset($_GET["categoria"])) {
		$articles = $article->fecth_all_public("WHERE categoria = " . $_GET["categoria"] . " AND borrador = 0", $pagina);
		$busqueda_actual = "?categoria=" . $_GET["categoria"];
		include_once('includes/categoria.php');
		$categoria_o = new Categoria();
		$categoria_nombre = $categoria_o->fecth_data($_GET["categoria"]);
		$feedback = "Categoría: " . $categoria_nombre["nombre"];
		
	}
	else if(isset($_GET["etiqueta"])) {
		$articles = $article->fecth_all_public("WHERE etiquetas LIKE '%" . $_GET["etiqueta"] . "%' AND borrador = 0", $pagina);
		$busqueda_actual = "?etiqueta=" . $_GET["etiqueta"];
		$feedback = "Etiqueta: " .  $_GET["etiqueta"];
	}
	else {
		$articles = $article->fecth_all_public("WHERE borrador = 0", $pagina);
		$busqueda_actual = "";
		$feedback = "";
	}
	
?>