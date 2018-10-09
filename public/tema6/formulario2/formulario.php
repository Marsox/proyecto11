<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios usables</title>
</head>
<body>
	<h1>Formularios usables</h1>

	<?php if (!$_POST) {
		include "formulario.html";
	}  else {
		if (!isset($_POST["nombre"])) {
			echo "No he recibido el nombre";
		}
		if (strlen($_POST["nombre"]) <3 ) {
			echo "campo nombre demasiado corto";
		}
		if (!isset($_POST["email"])) {
			echo "no he recibido el email.";
		}
		if (strlen($_POST["email"]) <6 ) {
			echo "El email no puede ser válido";
		}
		if (!isset($_POST["clave1"]) || !isset($_POST["clave2"])) {
			echo "No he recibido ambas claves";
		}
		if (strlen($_POST["clave1"]) < 6 ) {
			echo "La clave debe tener al menos 6 caracteres";
		}
		if ($_POST["clave1"] != $_POST["clave2"]) {
			echo "Las claves tienen que ser iguales";
		}

		if ($errores) {
			mostrar_errores($errores);
			echo '<br><a href="javascript:history.go(-1)">Volver al Formulario</a>';
		} else {
			echo "Todo bien, registro de usuario completado";
		}

		function mostrar_errores($errores) {
			echo '<ul> class="listaerrores">';
			foreach ($errores as $error) {
				echo "<li><$error/li>";
			}
			echo "</ul>";
		}
	}
	?>

	
</body>
</html>