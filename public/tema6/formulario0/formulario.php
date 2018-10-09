<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios Usables</title>
</head>
<body>
	<h1>Formularios Usables</h1>
	<?php if (! $_POST) { 

		include('formulario.html');

	} else {
		//Procesamos el Formulario
		if (! isset($_POST["nombre"])) {
			echo "No he recibido el nombre";
		} else if (strlen($_POST["nombre"]) < 3 ) {
			echo "campo nombre demasiado corto";
		} else if (!isset($_POST["email"])) {
			echo "no he recibido el email.";
		} else if (strlen($_POST["email"]) < 6 ) {
			echo "El email no puede ser válido";
		} else if (! isset($_POST["clave1"]) || !isset($_POST["clave2"])) {
			echo "No he recibido ambas claves";
		} else if (strlen($_POST["clave1"]) < 6 ) {
			echo "La clave debe tener al menos 6 caracteres";
		} else if ($_POST["clave1"] != $_POST["clave2"]) {
			echo "Las claves tienen que ser iguales";
		} else {
			echo "Todo bien, registro de usuario completado";
		}
	} ?>

</body>
</html>