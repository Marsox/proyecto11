<?php 

/* Programa que calcule el factorial de un número. */


$numero = 10;

$resultado = 1;

for ($i=0; $i < $numero; $i++) { 
	$resultado *= ($i + 1);
}
echo 'El resultado de ' . $numero . '! es ' . $resultado . '<br>';


$resultado = 2;

for ($i=1; $i <= $numero; $i++) { 
	$resultado *= $i;
}
echo 'El resultado de ' . $numero . '! es ' . $resultado . '<br>';


$resultado = 3;

$i = 1;

while ($i <= $numero) {
	$resultado *= $i;
	$i++;
}
echo 'El resultado de ' . $numero . '! es ' . $resultado . '<br>';

 ?>