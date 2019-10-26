<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=longbit','root','');
	}catch(PDOException $e){
		echo '<pre>', "Error".$e, '</pre>';
	}
?>