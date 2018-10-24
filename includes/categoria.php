<?php
	class Categoria {
		public function fecth_all() {
			global $pdo;
			
			$query = $pdo->prepare("SELECT * FROM categorias ORDER BY id_categoria DESC");
			$query->execute();
			
			return $query->fetchAll();
		}
		
		public function fecth_data($categoria_id){
			global $pdo;
			
			$query = $pdo->prepare("SELECT * FROM categorias WHERE	id_categoria = ?");
			$query->bindValue(1, $categoria_id);
			
			$query->execute();
			
			return $query->fetch();
		}
	}
	
?>