<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1-2</title>
</head>
<body>

	<a href="../index.php">Regresar al Menú</a>
	<br>
	<br>
	
	<?php 

	/* Dada una temperatura en grados Celsius, convertirla a Fahrenheit, mostrando por pantalla un mensaje del tipo "xxx.xx grados Celsius son yyy.yy grados Fahrenheit”. */


	$temperaturaCel = 30;

	$temperaturaFah = ($temperaturaCel * 1.8) + 32;

	echo "$temperaturaCel Grados Celsius son $temperaturaFah Grados Fahrenheit.";

	 ?>

</body>
</html>