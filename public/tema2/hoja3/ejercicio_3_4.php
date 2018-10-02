<?php 

/* Escribir un programa que calcule el número combinatorio M/N que era M!/(N!*(M-N)!). Para ello hará uso de la función factorial. */


function factorial($numero) {

	$resultado = 1;

	for ($i=1; $i <= $numero; $i++) { 
		$resultado *= $i;
	}
	return $resultado;
}

$m = 6;
$n = 4;

$solucion = factorial($m) / (factorial($n) * factorial($m-$n));

echo "Solución $solucion";

 ?>