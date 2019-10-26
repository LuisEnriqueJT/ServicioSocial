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
	<div class="container">
		<div class="row justify-content-center">
			
			<div class="col-12 col-md-6">
				
				<?php foreach($publicacion as $listado):?>
			
					<div>
						<h4><?php echo $listado['nombre']?></h4>
						<p class="justify"><?php echo $listado['parrafo1']?></p>
						<p><?php echo $listado['parrafo2']?></p>
						<p><?php echo $listado['parrafo3']?></p>
						
					</div>
			
				<?php endforeach;?>
			
			</div>

		</div>
		
	</div>
</body>
</html>