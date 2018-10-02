<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1-5</title>
</head>
<body>

	<a href="../index.php">Regresar al Menú</a>
	<br>
	<br>
	
	<?php 

	/* Escribir un programa que pregunte el año actual y la edad de una persona y calcule la edad de esa persona en el año 2020. */

	$añoActual = 2018;
	$edad = 27;

	$resultado = (2020 - $añoActual) + $edad;

	echo "La edad de la persona en el 2020 sera de $resultado años.";

	?>

</body>
</html>