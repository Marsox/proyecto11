<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uso de Post</title>
</head>
<body>

	<?php 

	if (! $_POST) {
		include 'formulario.php';
	} else {
		if (isset($_POST['registrarse']) && $_POST['registrarse'] == 'Enviar') {
			echo "Muchas gracias por registrarte en el sistema.";
		} elseif (isset($_POST['registrarse']) && $_POST['registrarse'] == 'Cancelar') {
			echo "<br>Que pena!! Tu te lo pierdes";
		} else {
			echo "<br>Operación no permitida";
		}

		if (isset($_POST['nombre']) ) {
			echo "<br>Tu nombre es " . $_POST['nombre'] ;
		}
		if (isset($_POST['email']) ) {
			echo "<br>Tu email es " . $_POST['email'];
		}
		if ($_POST['clave']['original'] == $_POST['clave']['repetida']) {
			echo "<br>Tu clave es correcta";
		} else
			echo "<br>Tu clave es incorrecta";
	}


	?>

</body>
</html>
