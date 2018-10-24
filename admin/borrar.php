<?php

	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/article.php');
	
	$article = new Article();
	
	if(isset($_SESSION['logged_in'])) {
		//Delete Page
		
		if(isset($_GET['id'])) {
			
			$id = $_GET['id'];
			
			$data = $article->fecth_data_id($id);
			$url = $data['url'];
			$foto = $data['foto'];
			
			$query = $pdo->prepare('DELETE FROM comentarios WHERE articulo = ?');
			$query->bindValue(1, $id);	
			$query->execute();
			
			$query = $pdo->prepare('DELETE FROM articles WHERE article_id = ?');
			$query->bindValue(1, $id);	
			$query->execute();
			
			$archivo = "./images/imagenesPosts/" . $foto;
			if($archivo!="./images/imagenesPosts/noPhoto.jpg"){
				unlink($archivo);
			}
			
			$path = "../" . $url . ".php";
			unlink($path);
			
			header('Location: cms.php');
			
		}
		echo "Vaya :S Parece que algo ha salido mal";		
	} else {
		header('Location: login.php');
	}
?>