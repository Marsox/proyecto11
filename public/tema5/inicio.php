<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
</head>
<body>

	<?php 

		if (isset($_SESSION['user']['none'])) {
			echo "Eres " . $_SESSION['user']['none'];
		} else {
			echo "No estas logueado";
		}

	?>

	<br>
	<a href="loguearme.php">Identificarme</a>
	<br>
	<a href="logout.php">Cerrar Sesión</a>
	
</body>
</html>