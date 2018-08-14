<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<!-- jQuery first, then Popper.js and Bootstrap JS. -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
	<title>title</title>
</head>
<body>
	<div class="container mt-5">
		<table class="table table-bordered">
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Correo</th>
				<th>Mensaje</th>
			</tr>
		</table>
	</div>
	<script>
		/*jshint -W119*/
		var socket = io.connect("http://localhost:8000");

		socket.on("nueva_orden",function(data){
			$("table").append(`<tr><td>${data.nombre}</td><td>${data.apellido}</td><td>${data.email}</td><td>${data.mensaje}</td></tr>`);
		});
	</script>
</body>
</html>