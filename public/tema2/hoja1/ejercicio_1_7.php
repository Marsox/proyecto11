<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejericio 1-7</title>
</head>
<body>

	<a href="../index.php">Regresar al Menú</a>
	<br>
	<br>

	<?php 

	/* Crear un programa que pida un número real y muestre la tabla de multiplicar correspondiente a dicho número perfectamente formateada y con una precisión de dos dígitos. */

	$numero = 5;

	for ($i=1;  $i<11; $i++) { 
		echo "$numero x $i = " . ($numero*$i) . "<br>";
	}

	?>
</body>
</html> 