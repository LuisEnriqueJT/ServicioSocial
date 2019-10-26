<?php
	require 'php/Funciones.php';
	$obj = new Funciones();

	if(isset($_POST['nombre'],$_POST['parrafo1'],$_POST['parrafo2'],$_POST['parrafo3'])){
		$editar = $obj->actualizarPublicacion($_POST['nombre'],$_POST['parrafo1'],$_POST['parrafo2'],$_POST['parrafo3']); 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			
			<div class="col-12 col-md-6 ">
				<form method="post">
					<br>
					<select name="nombre" class="custom-select">
						<option value="Proyecto 1">Proyecto 1</option>
						<option value="Proyecto 2">Proyecto 2</option>
						<option value="Proyecto 3">Proyecto 3</option>
					</select>
					<br>
					<br>
					<textarea name="parrafo1" cols="10" rows="5" class="form-control"></textarea>
					<br>
					<textarea name="parrafo2" cols="10" rows="5" class="form-control"></textarea>
					<br>
					<textarea name="parrafo3" cols="10" rows="5" class="form-control"></textarea>
					<br>
					<input type="submit" value="Enviar" class="btn btn-warning">
				</form>
			</div>

		</div>
		
	</div>
</body>
</html>