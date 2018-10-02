<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1-1</title>
</head>
<body>
	
	<a href="../index.php">Regresar al Menú</a>
	<br>
	<br>

	<?php 

	/* Dado un valor en pesetas, convertirlo a euros. La solución deberá tener dos decimales. */

	$pesetas = 1000;

	$euros = $pesetas / 166.386;

	echo "La cantidad de $pesetas Pesetas son " . round($euros,2) . " Euros.";


	?>

</body>
</html>