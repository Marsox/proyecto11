<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4-3</title>
</head>
<body>

	<a href="../index.php">Regresar al Menú</a>
	<br>
	<br>

	<?php 

	function desencriptar($cadena, $clave){
		$solucion = '';
		for ($i=0; $i<strlen($cadena); $i++) { 
			$letra = $cadena[$i];
			$letraNumerica = ord($letra);
			$newLetraNumerica = $letraNumerica + $clave;
			if ($newLetraNumerica > 90) {
				$newLetraNumerica -= 26;
			} elseif ($newLetraNumerica < 65) {
				$newLetraNumerica += 26;
			}
			$solucion[$i] = chr($newLetraNumerica);
		}
		return $solucion;
	}


	$cadenaEncriptada = "LEGREXIRDRVJLEKVOKFHLVTFEKZVEVKFURJCRJCVKIRJUVCRSVTVURIZFLEVAVDGCFVJTRURMVQHLVKIRSRAFWVCZODVGRXRLENYZJBP";

	$cadena = $cadenaEncriptada;

	$clave = 0;

	while (! strpos($cadena, 'FELIX')) {
		$clave--;
		$cadena = desencriptar($cadenaEncriptada, $clave);
	}

	echo "$cadena";


	?>
	
</body>
</html>