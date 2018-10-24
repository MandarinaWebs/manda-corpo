<?php
	class User {
		public function fecth_data($user_id){
			global $pdo;
			
			//$query = $pdo->prepare("SELECT * FROM user WHERE user_id = ?");
			$query = $pdo->prepare("SELECT user.*, COUNT(articles.article_id) as articulos_publicados FROM user JOIN articles ON articles.usuario = user.user_id WHERE user_id = ?");
			
			$query->bindValue(1, $user_id);
			
			$query->execute();
			
			return $query->fetch();
		}
	}
	
?>