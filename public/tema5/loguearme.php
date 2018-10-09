<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina de Autenticación</title>
</head>
<body>
	<a href="inicio.php">Regresar a Inicio</a>
	<br>
	<br>
		
		<h1>Ya estás logueado</h1>

		<?php $_SESSION['user']['name'] = 'Eduardo' ?>

		<h2>Con el nombre: <?= $_SESSION['user']['name'] = 'Eduardo' ?> </h2>

		<a href="logout.php">Cerrar Sesión</a>

</body>
</html>