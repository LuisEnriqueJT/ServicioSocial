<?php
	require 'php/Funciones.php';
	$variable = new Funciones();
	$publicacion = $variable->getPublicacion();
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

	<div class="container-fluid">
		<nav class="navbar fixed-top navbar-light bg-dark">
 			<a class="navbar-brand" href="mostrar.php">Ver</a>
 			<a class="navbar-brand" href="index.php">Editar</a>
		</nav>	
	</div>
	<br>
	<div class="container-fluid mt-5">
		<div class="row">
			
				
			<div class="col-12 col-md-8">
				<?php foreach($publicacion as $listado):?>
			
					<div class="">
						<h4><?php echo $listado['nombre']?></h4>
						<p class=""><?php echo $listado['parrafo1']?></p>
						<p class=""><?php echo $listado['parrafo2']?></p>
						<p class=""><?php echo $listado['parrafo3']?></p>
						
					</div>
			
				<?php endforeach;?>
			
			</div>

		</div>
		
	</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>