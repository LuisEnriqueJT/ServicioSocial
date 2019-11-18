<?php
	require 'php/Funciones.php';
	$obj = new Funciones();
	//$publicacion = $obj->getTexto($_POST['nombre']);

	if(isset($_POST['actualizar'])){
		if(isset($_POST['nombre'],$_POST['parrafo1'],$_POST['parrafo2'],$_POST['parrafo3'])){
			$editar = $obj->actualizarPublicacion($_POST['nombre'],$_POST['parrafo1'],$_POST['parrafo2'],$_POST['parrafo3']); 
		}
	}else if(isset($_POST['recuperar'])){
		if(isset($_POST['nombre'])){
			$publicacion = $obj->getTexto($_POST['nombre']);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	
	<div class="container">
		
	</div>

	<div class="container-fluid">
		<nav class="navbar fixed-top bg-dark elNavbar">
 			<a class="navbar-brand" href="mostrar.php">Ver</a>
 			<a class="navbar-brand" href="index.php">Editar</a>
		</nav>	
	</div>
	<br>

	<div class="container mt-5">
		<div class="row justify-content-center">
		
			<div class="col col-lg-6">
				<form method="post">
					<br>
					<select name="nombre" class="custom-select">
						<option value="Proyecto 1">Proyecto 1</option>
						<option value="Proyecto 2">Proyecto 2</option>
						<option value="Proyecto 3">Proyecto 3</option>
					</select>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col col-lg-6">
				
					<br>
					<br>
					<textarea name="parrafo1" cols="10" rows="5" class="form-control">
						<?php
						echo $publicacion['parrafo1'];
						?>
					</textarea>

			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col col-lg-6">
				
					<br>
					<textarea name="parrafo2" cols="10" rows="5" class="form-control">
						<?php
						echo $publicacion['parrafo2'];
						?>
					</textarea>
			</div>
			
		</div>
		<div class="row justify-content-center">
			<div class="col col-lg-6">
				<br>
				<textarea name="parrafo3" cols="10" rows="5" class="form-control">
					<?php
					echo $publicacion['parrafo3'];
					?>
				</textarea>
				<br>
			</div>	
			
		</div>
		<div class="row justify-content-center">
			<div class="col col-lg-6">
					<input type="submit" name="actualizar" value="Enviar" class="btn btn-warning">
					<input type="submit" name="recuperar" value="Recuperar" class="btn btn-info">
				</form>
				
			</div>
			
		</div>	
		</div>
		
	</div>
</body>
</html>