<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 1-3</title>
</head>
<body>

	<a href="../index.php">Regresar al Menú</a>
	<br>
	<br>

	<?php 

	/* Dado el radio de una circunferencia, calcular su longitud así como su área. */

	$radio = 2.5;

	$longitud = 2 * pi() * $radio;
	$area = pow(pi(), 2) * $radio;

	echo "Dada una circunferencia de $radio cm.<br>";
	echo 'La longitud de la circunferencia es ' .round($longitud, 3). ' cm.<br>';
	echo 'El area de la circunferencia es ' . round($area, 3) . ' cm2.<br>';

	?>

</body>
</html>