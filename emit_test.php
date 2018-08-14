<?php 

	include ("vendor/autoload.php");

	use ElephantIO\Client;
	use ElephantIO\Engine\SocketIO\Version2X;

	if (isset($_POST['submit'])){

		$form_data = array( 'nombre' =>$_POST['nombre'],
		  									'apellido'=>$_POST['apellido'],
		  									'email'=>$_POST['email'],
		  									'mensaje'=>$_POST['mensaje']
		);

		$version = new Version2X('http://localhost:8000');

		$client = new Client($version);

		$client->initialize();
		$client->emit("nueva_orden", $form_data);
		$client->close();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<title>Emisor</title>
</head>
<body>
	<div class="container mt-5">
		<form method="post">
			<div class="row">
				<div class="col-sm-8 sm-offset-1">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control" autofocus>
					</div>
					<div class="form-group">
						<label for="apellido">apellido</label>
						<input type="text" name="apellido" id="apellido" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Correo</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="mensaje">Mensaje</label>
						<textarea type="text" name="mensaje" id="mensaje" class="form-control" cols='5'></textarea>
					</div>
					<div class="form-inline text-center">
						<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
					</div>
				</div>
			</div>			
		</form>
	</div>	

	<!-- jQuery first, then Popper.js and Bootstrap JS. -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>