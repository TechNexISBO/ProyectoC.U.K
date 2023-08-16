<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=participantes&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["participante"]["nombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="apellcio">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $data["participante"]["apellido"]?>" />
				</div>
				
				<div class="form-group">
					<label for="ci">Cedula de cientciad</label>
					<input type="int" class="form-control" id="ci" name="ci" value="<?php echo $data["participante"]["ci"]?>" />
				</div>
				
				<div class="form-group">
					<label for="fnac">Fecha de nacimiento</label>
					<input type="date" class="form-control" id="fnac" name="fnac" value="<?php echo $data["participante"]["fnac"]?>" />
				</div>
				
				<div class="form-group">
					<label for="escuela">Escuela</label>
					<input type="text" class="form-control" id="escuela" name="escuela" value="<?php echo $data["participante"]["escuela"]?>" />
				</div>

				<div class="form-group">
					<label for="pais">Pais</label>
					<input type="text" class="form-control" id="pais" name="pais" value="<?php echo $data["participante"]["pais"]?>" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		