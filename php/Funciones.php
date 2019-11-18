<?php
	require 'init.php';

	class Funciones{

		public function getPublicacion(){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM proyecto");
			$query->execute();

			return $query->fetchAll();
		}

		public function actualizarPublicacion($nombre, $parrafo1, $parrafo2, $parrafo3){
			global $pdo;

			$query = $pdo->prepare("UPDATE proyecto SET parrafo1=:p1, parrafo2=:p2, parrafo3=:p3 WHERE nombre=:nombre");

			$data = [
				'nombre' => $nombre,
				'p1' => $parrafo1,
    			'p2' => $parrafo2,
    			'p3' => $parrafo3,
   			];

			$query->execute($data);
		}

		public function getTexto($nombre){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM proyecto WHERE nombre = :nombre");

			$query->execute(['nombre'=>$nombre]);

			return $query->fetch();
		}

	}

?>