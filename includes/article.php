<?php
	class Article {
		public function fecth_all_cms() {
			global $pdo;
			
			$query = $pdo->prepare("SELECT articles.*, user_name FROM articles JOIN user ON articles.usuario = user.user_id ORDER BY article_id DESC");
			$query->execute();
			
			return $query->fetchAll();
		}
		
		public function fecth_all_public($extra, $pagina) {
			global $pdo;
			
			$resultados = ($pagina - 1) * 10;
			//$query = $pdo->prepare("SELECT articles.*, user_name FROM articles JOIN user ON articles.usuario = user.user_id " . $extra . " ORDER BY article_id DESC LIMIT 10 OFFSET " . $resultados);
			
			$query = $pdo->prepare("SELECT articles.*, user_name, (select count(*) FROM articles " . $extra . ") AS count FROM articles JOIN user ON articles.usuario = user.user_id " . $extra . " ORDER BY article_id DESC LIMIT 10 OFFSET " . $resultados);
			
			$query->execute();
			
			return $query->fetchAll();
		}
		
		public function fecth_data($url){
			global $pdo;
			
			//$query = $pdo->prepare("SELECT * FROM articles WHERE url = ?");
			$query = $pdo->prepare("SELECT articles.*, user_name, categorias.nombre as nombre_categoria FROM articles JOIN user ON articles.usuario = user.user_id JOIN categorias ON articles.categoria = categorias.id_categoria WHERE url = ?");
			$query->bindValue(1, $url);
			
			$query->execute();
			
			return $query->fetch();
		}
		
		public function fecth_data_id($id){
			global $pdo;
			
			$query = $pdo->prepare("SELECT * FROM articles WHERE article_id = ?");
			$query->bindValue(1, $id);
			
			$query->execute();
			
			return $query->fetch();
		}
		
		public function fecth_data_count(){
			global $pdo;
			
			$query = $pdo->prepare("SELECT COUNT(*) FROM articles");
			
			$query->execute();
			
			return $query->fetch();
		}
	}
	
?>